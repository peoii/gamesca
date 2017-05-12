<?php
include_once "bgg.php";
$myCollection = new BGGHandler("harrellca");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Harrell.CA - Games</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600,300|Montserrat:400,700' rel='stylesheet' type='text/css' async />
    <link href='css/font-awesome.min.css' rel='stylesheet' type='text/css' />
    <link href='style.css' rel='stylesheet' type='text/css' />
    -->
  </head>
  <body>
    <div class="sidebar">
      <div class="rotate"><div class="inner">games.harrell<span class="postfix">.ca</span></div></div>
      <div><i class="fa fa-code" aria-hidden="true"></i> with <i class="fa fa-beer" aria-hidden="true"></i> by <a href="//jamie.harrell.ca/">Jamie</a></div>
    </div>
    <div class="content">
      <h2>Welcome to our Games Hub</h2>
      <p>Board games are something that have challenged us, occupied our free time, and brought us closer together as a couple.</p>
      <nav>
        <ul>
          <li><a href="#">Game Plays</a></li>
          <li><a href="#">Collection</a></li>
          <li><a href="#">Wishlist</a></li>
        </ul>
      </nav>
      <div class="tab">
        <div>
          <h4><i class="fa fa-fw fa-lg fa-line-chart" aria-hidden="true"></i> BGG Statistics</h4>
          <table>
            <?php $myCollection->getUser(); ?>
          </table>
        </div>
        <div>
          <h4><i class="fa fa-fw fa-star" aria-hidden="true"></i>Highest Rated Games in our collection</h4>
          <table class="topRated">
            <?php $myCollection->getTopRated(10); ?>
          </table>
        </div>
      </div>
      <div class="tab">
        <div>
          <h4><i class="fa fa-fw fa-lg fa-gamepad" aria-hidden="true"></i> Games we've recently played</h4>
          <ul>
            <?php $myCollection->getRecentlyPlayed(15); ?>
          </ul>
        </div>
        <div>
          <h4><i class="fa fa-fw fa-bell" aria-hidden="true"></i>(<?php $myCollection->getShameCount(); ?>) Shame List - Games we own, but have not played</h4>
          <ul>
            <?php $myCollection->getShameList(); ?>
          </ul>
        </div>
      </div>
    </div>
    <noscript id="deferred-styles">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600,300|Montserrat:400,700' rel='stylesheet' type='text/css' async />
      <link href='css/font-awesome.min.css' rel='stylesheet' type='text/css' />
      <link href='style.css' rel='stylesheet' type='text/css' />
    </noscript>
    <script>
      var loadDeferredStyles = function() {
        var addStylesNode = document.getElementById("deferred-styles");
        var replacement = document.createElement("div");
        replacement.innerHTML = addStylesNode.textContent;
        document.body.appendChild(replacement)
        addStylesNode.parentElement.removeChild(addStylesNode);
      };
      var raf = requestAnimationFrame || mozRequestAnimationFrame ||
          webkitRequestAnimationFrame || msRequestAnimationFrame;
      if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); });
      else window.addEventListener('load', loadDeferredStyles);
    </script>
  </body>
</html>
