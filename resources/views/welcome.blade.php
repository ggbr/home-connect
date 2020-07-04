<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/all.min.js" integrity="sha256-HkXXtFRaflZ7gjmpjGQBENGnq8NIno4SDNq/3DbkMgo=" crossorigin="anonymous"></script>
</head>
  <body>
  <section class="section">
    <div id="app" class="container">
        <list-device></list-device>


        <div class="card">
          <div class="card-content">
            <div class="content">
              <label>
                Web IP
              </label><br>
              <img class="can" name="main" id="main" border="0" width="250"  src="http://10.0.0.166:8080/video">
        
            </div>
          </div>
        </div>


          <div class="columns">
          <div class="column">
            <div class="card">
              <div class="card-content">
                <div class="content">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris.
                </div>
              </div>            
            </div>
          </div>
        </div>
    </div>
  </section>
  <script src="js/app.js">
  </script>
  <style>
    html{
      background-image: url("img/bg.jpg");
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
 
    }

    .card{
    align-content: center;
    text-align: center;
    margin: 5px;
    background: inherit;
    display: inline-block;
    overflow: hidden;  
    webkit-backdrop-filter: blur(20px);
    backdrop-filter: blur(20px);
    background-color: rgba(255,255,255,.3);
     transition: box-shadow 0.2s;

 }

 .card:hover{
     box-shadow: 0px 0px 10px 1px  #0a0a0a4a;
     transition: box-shadow 0.2s;
 }


    .card:before{
      background-color: rgba(255,255,255,.3);
      content: ‘’;
      background: inherit; 
      position: absolute;
      left: -25px;  
      right: 0;
      top: -25px;  
      bottom: 0;
      box-shadow: inset 0 0 0 200px rgba(255,255,255,0.3);
      filter: blur(20px);
      backdrop-filter: blur(20px)
    }

    .can{
      padding: 5px;
    }

   
  </style>
  </body>