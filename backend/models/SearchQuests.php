<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Quests;

/**
 * SearchQuests represents the model behind the search form about `backend\models\Quests`.
 */
class SearchQuests extends Quests
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'quest_price', 'quest_max_players', 'created_at', 'updated_at'], 'integer'],
            [['quest_en_name', 'quest_name', 'quest_description', 'quest_logo'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Quests::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'quest_price' => $this->quest_price,
            'quest_max_players' => $this->quest_max_players,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'quest_en_name', $this->quest_en_name])
            ->andFilterWhere(['like', 'quest_name', $this->quest_name])
            ->andFilterWhere(['like', 'quest_description', $this->quest_description])
            ->andFilterWhere(['like', 'quest_logo', $this->quest_logo]);

        return $dataProvider;
    }
}
