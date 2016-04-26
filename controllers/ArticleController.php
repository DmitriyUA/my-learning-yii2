<?php
/**
 * Created by PhpStorm.
 * User: ASU-3
 * Date: 25.04.16
 * Time: 13:45
 */

namespace app\controllers;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Article;

class ArticleController extends Controller
{
    public function actionIndex()
    {
        $query = Article::find();

        $pagination = new Pagination([
            'defaultPageSize' => '5',
            'totalCount' => $query->count(),
        ]);

        $article = $query->orderBy('date')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('index',
            [
                'article' => $article,
                'pagination' => $pagination,
            ]);
    }
}