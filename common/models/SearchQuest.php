<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Quest;

/**
 * SearchQuest represents the model behind the search form about `common\models\Quest`.
 */
class SearchQuest extends Quest
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'quest_price', 'quest_max_players', 'quest_logo', 'created_at', 'updated_at'], 'integer'],
            [['quest_en_name', 'quest_name', 'quest_description'], 'safe'],
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
        $query = Quest::find();

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
            'quest_logo' => $this->quest_logo,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'quest_en_name', $this->quest_en_name])
            ->andFilterWhere(['like', 'quest_name', $this->quest_name])
            ->andFilterWhere(['like', 'quest_description', $this->quest_description]);

        return $dataProvider;
    }
}
