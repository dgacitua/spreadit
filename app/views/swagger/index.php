<!DOCTYPE html>
<html>
<head>
  <title>spreadit.io :: Swagger UI</title>

  <link href='//fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'/>
  <link href='/assets/css/reset.css' media='screen' rel='stylesheet' type='text/css'/>
  <link href='/assets/css/screen.css' media='screen' rel='stylesheet' type='text/css'/>
  <link href='/assets/css/reset.css' media='print' rel='stylesheet' type='text/css'/>
  <link href='/assets/css/screen.css' media='print' rel='stylesheet' type='text/css'/>
  <script type="text/javascript" src="/assets/lib/shred.bundle.js"></script>
  <script src='/assets/lib/jquery-1.8.0.min.js' type='text/javascript'></script>
  <script src='/assets/lib/jquery.slideto.min.js' type='text/javascript'></script>
  <script src='/assets/lib/jquery.wiggle.min.js' type='text/javascript'></script>
  <script src='/assets/lib/jquery.ba-bbq.min.js' type='text/javascript'></script>
  <script src='/assets/lib/handlebars-1.0.0.js' type='text/javascript'></script>
  <script src='/assets/lib/underscore-min.js' type='text/javascript'></script>
  <script src='/assets/lib/backbone-min.js' type='text/javascript'></script>
  <script src='/assets/lib/swagger.js' type='text/javascript'></script>
  <script src='/assets/swagger-ui.js' type='text/javascript'></script>
  <script src='/assets/lib/highlight.7.3.pack.js' type='text/javascript'></script>

  <!-- enabling this will enable oauth2 implicit scope support -->
  <script src='/assets/lib/swagger-oauth.js' type='text/javascript'></script>

  <script type="text/javascript">
    $(function () {
      window.swaggerUi = new SwaggerUi({
      url: "/api/routes",
      dom_id: "swagger-ui-container",
      supportedSubmitMethods: ['get', 'post', 'put', 'delete'],
      onComplete: function(swaggerApi, swaggerUi){
        log("Loaded SwaggerUI");
        $('pre code').each(function(i, e) {
          hljs.highlightBlock(e)
        });
      },
      onFailure: function(data) {
        log("Unable to Load SwaggerUI");
      },
      docExpansion: "none"
    });

    $('#input_apiKey').change(function() {
      var key = $('#input_apiKey')[0].value;
      log("key: " + key);
      if(key && key.trim() != "") {
        log("added key " + key);
        window.authorizations.add("key", new ApiKeyAuthorization("api_key", key, "query"));
      }
    })
    window.swaggerUi.load();
  });
  </script>
</head>

<body class="swagger-section">
<div id='header'>
  <div class="swagger-ui-wrap">
    <a id="logo" href="http://swagger.wordnik.com">spreadit</a>
  </div>
</div>

<div id="message-bar" class="swagger-ui-wrap">&nbsp;</div>
<div id="swagger-ui-container" class="swagger-ui-wrap"></div>
</body>
</html>
