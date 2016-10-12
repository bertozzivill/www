<html>
<head>
    <title>Amelia Bertozzi-Villa</title>
    <meta name="description" value="Amelia is a disease modeler and data visualizer based out of Seattle, Washington." />
    <meta property="og:site_name" content="Amelia Bertozzi-Villa" />
    <meta property="og:title" content="Amelia Bertozzi-Villa" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://ameliabv.com/" />
    <meta property="og:description" content="Amelia is a disease modeler and data visualizer based out of Seattle, Washington." />
    <meta property="og:locale" content="en_US" />
    <meta property="og:image" content="https://ameliabv.com/assets/img/og-thumb.jpg" />

    <link rel="stylesheet" href="/assets/css/style.css" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicon.ico" />
</head>
<body class="@yield('class')">
    <header>
        <h1>@yield('title')</h1>
        <nav>
            <ul>
            	<li><a href="/">Home</a></li>
                <li><a href="http://idmod.org/team/research/malaria" target="_blank">Work</a></li>
                <li><a href="/publications">Publications</a></li>
                <li><a href="https://medium.com/@abertozz" target="_blank">Blog</a></li>
                <li><a href="https://twitter.com/abertozz" target="_blank">@abertozz</a></li>
            </ul>
        </nav>
    </header>
    <section class="hero"></section>
    <section class="content">
        @yield('content')
    </section>
    <section class="map"></section>
    <footer>&copy; 2014-2016 Amelia Bertozzi-Villa</footer>

    <script type="text/javascript" src="https://use.typekit.net/xqr8oql.js"></script>
    <script type="text/javascript">
        try{Typekit.load();}catch(e){}
    </script>
</body>
</html>
