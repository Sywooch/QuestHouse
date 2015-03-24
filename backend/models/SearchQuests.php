<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Quests;

/**
 * SearchQuests represents the model behind the search form about `app\models\Quests`.
 */
class SearchQuests extends Quests
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'quest_min_people', 'quest_max_people', 'quest_min_price','quest_max_price','quest_picture', 'quest_time', 'quest_difficulty', 'quest_rating', 'quest_city_id', 'quest_status', 'created_at', 'updated_at'], 'integer'],
            [['quest_name', 'quest_en_name', 'quest_creator', 'quest_owner_link', 'quest_description'], 'safe'],
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
            'quest_min_people' => $this->quest_min_people,
            'quest_max_people' => $this->quest_max_people,
            'quest_picture' => $this->quest_picture,
            'quest_min_price' => $this->quest_min_price,
            'quest_max_price' => $this->quest_max_price,
            'quest_time' => $this->quest_time,
            'quest_difficulty' => $this->quest_difficulty,
            'quest_rating' => $this->quest_rating,
            'quest_city_id' => $this->quest_city_id,
            'quest_status' => $this->quest_status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'quest_name', $this->quest_name])
            ->andFilterWhere(['like', 'quest_en_name', $this->quest_en_name])
            ->andFilterWhere(['like', 'quest_creator', $this->quest_creator])
            ->andFilterWhere(['like', 'quest_owner_link', $this->quest_owner_link])
            ->andFilterWhere(['like', 'quest_description', $this->quest_description]);

        return $dataProvider;
    }
}
