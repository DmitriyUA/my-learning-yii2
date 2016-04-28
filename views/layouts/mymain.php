<?php
/**
 * Created by PhpStorm.
 * User: ASU-3
 * Date: 12.04.16
 * Time: 10:09
 */
/* @var $content string
   @var $this \yii\web\View
 */
use yii\helpers\Html;
use yii\bootstrap\Modal;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\bootstrap\ActiveForm;
AppAsset::register($this);
?>
<?php $this->beginPage(); ?>
    <!DOCTYPE html>
    <html lang = "<?= Yii::$app->language ?>">
<head>
    <meta charset = "<?= Yii::$app->charset ?>" />
    <?php $this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1']) ?>
    <title><?= Yii::$app->name ?></title>
    <?php $this->head() ?>
    <link rel="shortcut icon" href="/web/favicon-yii.ico" type="image/x-icon" />
</head>

<body>
<?php $this->beginBody()?>

    <div class = "wrap">
        <div class = "container my-container">
            <header class = "header my-header">

            </header>
        </div>
    	<div class = "container my-container">
          <?php
              Navbar::begin([
                  'brandLabel' => 'Test application',
                  'options' =>
                      [
                          'class' => 'navigations'
                      ]
              ]);


          Modal::begin(
              [
                  'size' => 'modal-sm',
                  'header' => '<h2 style = "text-align: center;">Регистрация</h2>',
                  'options' =>
                      [
                          'id' => 'reg-modal',
                      ]
              ]);
              $model = new \app\models\RegForm();
              $form = ActiveForm::begin(); ?>

              <?= $form->field($model, 'username') ?>
              <?= $form->field($model, 'email') ?>
              <?= $form->field($model, 'password')->passwordInput() ?>

              <div class="form-group">
                  <?= Html::submitButton('Регистрация', ['class' => 'btn btn-primary']) ?>
              </div>
              <?php ActiveForm::end();
          Modal::end();

          Modal::begin(
              [
                  'size' => 'modal-sm',
                  'header' => '<h2 style = "text-align: center;">Вход</h2>',
                  'options' =>
                      [
                          'id' => 'login-modal'
                      ]
              ]);
              $model = new \app\models\LoginForm();
              $form = ActiveForm::begin();?>

              <?= $form->field($model, 'username') ?>
              <?= $form->field($model, 'password') ?>
              <?= $form->field($model, 'rememberMe')->checkbox() ?>

              <div class="form-group">
                  <?= Html::submitButton('Войти', ['class' => 'btn btn-primary']) ?>
              </div>
              <?php ActiveForm::end();
          Modal::end();

         echo Nav::widget([
              'items' =>
                  [
                      '<li>
                          <a data-toggle = "modal" data-target = "#reg-modal" style = "cursor: pointer;">
                              Регистрация
                          </a>
                      </li>',
                      '<li>
                          <a data-toggle = "modal" data-target = "#login-modal" style = "cursor: pointer;">
                              Вход
                          </a>
                      </li>'
                  ],
             'options' => [
                 'class' => 'navbar-nav navbar-right'
             ]
          ]);
          ActiveForm::begin(
              [
                  'action' => ['my/search'],
                  'method' => 'post',
                  'options' => [
                      'class' => 'navbar-form navbar-right'
                  ]
              ]);
          echo '<div class = "input-group input-group-sm">';
          echo Html::input(
              'type:text',
              'search',
              '',
              [
                  'placeholder' => 'Найти...',
                  'class' => 'form-control'
              ]
          );
          echo '<span class = "input-group-btn">';
          echo Html::submitButton(
              '<span class = "glyphicon glyphicon-search">',
              [
                  'class' => 'btn btn-success'
              ]
          );
          echo '</span></div>';
          ActiveForm::end();
              NavBar::end();
          ?>

          <div class = "container">
              <div class = "row">
                  <div class = "col-xs-3">
                      <?=
                          Nav::widget([
                              'items' =>
                                   [
                                      [
                                          'label' => 'Html',
                                          'url' => ['page/html']
                                      ],
                                      [
                                          'label' => 'Css',
                                          'url' => ['page/css']
                                      ],
                                      [
                                          'label' => 'PHP',
                                          'url' => ['page/php']
                                      ],
                                      [
                                          'label' => 'JavaScript',
                                          'url' => ['page/javascript']
                                      ],
                                       [
                                           'label' => 'Articles',
                                           'url' => ['article/index']
                                       ]
                                  ]
                              ]);
                          ?>
                      </div>
                      <div class = "col-xs-9">
                          <?= $content ?>
                      </div>
                  </div>
          </div>
       </div>
    </div>
<div class = "container">
          <footer class = "footer">
              <div class = "container">
                  <div style = "text-align: center">
                      &copy Okhrimenko Dmitriy <?= date('Y') ?>
                  </div>
              </div>
          </footer>
</div>
<?php $this->endBody()?>
</body>
</html>
<?php $this->endPage(); ?>