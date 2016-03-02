<?php
/**
 * @file
 * Returns the HTML for the footer region.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728140
 */
?>
<?php if ($content): ?>
  <footer id="footer" class="<?php print $classes; ?>">
    <footer>
      <hr>

      <div class="container">
        <div class="row">

         <div class="col-md-12">
            <h3 class="text-brand"><a href="index.html" style=" color:#25B0E5; font-weight: 0; font-size: 24px;">D&#8217;source</a></h3>
            <p class="muted credit">Creating Digital-learning Environment for Design</p>
            <br>
          </div>

          <div class="col-sm-12 col-md-5">
            <form role="form">
              <div class="form-group">
                <label for="exampleInputEmail1">Suscribe to Newsletters</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
              </div>
              <button type="submit" class="btn btn-sm btn-default">Suscribe</button>
            </form>
            <br>
          </div>

          <div class="col-sm-12 col-md-1"></div>

          <div class="col-sm-4 col-md-2">
            <ul class="footer-links">
              <li><a href="course/index.html">Courses</a></li>
              <li><a href="resource/index.html">Resources</a></li>
              <li><a href="case-study/index.html">Case study</a></li>
              <li><a href="showcase/index.html">Showcase</a></li>
              <li><a href="gallery/index.html">Gallery</a></li>
              <li><a href="video/index.html">Videos</a></li>
            </ul>
          </div>

          <div class="col-sm-4 col-md-2">
            <ul class="footer-links">
              <li><a href="#">About</a></li>
              <li><a href="#">People</a></li>
              <li><a href="#">Sakshat Initiative</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </div>

          <div class="col-sm-4 col-md-2">
            <ul class="footer-links">
              <li><a href="#">YouTube</a></li>
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Twitter</a></li>
            </ul>
          </div>

        </div>
      </div>

      <br>
    </footer>
  </footer>
<?php endif; ?>
