<nav class="navbar">
    <ul class="nav navbar-nav">
        <li class="nav-item active">{{HTML::linkAction('AccueilController@index', 'Accueil', ['class' => 'nav-link'])}}</li>
        <li class="nav-item">{{HTML::linkAction('HistoireController@index', 'Histoire', ['class' => 'nav-link'])}}</li>
        <li class="nav-item">{{HTML::linkAction('CharsController@index', 'Char allégorique', ['class' => 'nav-link'])}}</li>
        <li class="nav-item">{{HTML::linkAction('MarionnettesController@index', 'Marionnette', ['class' => 'nav-link'])}}</li>
        <li class="nav-item">{{HTML::linkAction('GeantsController@index', 'Géant', ['class' => 'nav-link'])}}</li>
        <li class="nav-item">{{HTML::linkAction('CostumesController@index', 'Costume', ['class' => 'nav-link'])}}</li>
        <li class="nav-item">{{HTML::linkAction('ContactController@index', 'Contact', ['class' => 'nav-link'])}}</li>
    </ul>
</nav>