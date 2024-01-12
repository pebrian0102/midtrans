  <!-- Navbar -->
  <style>
      .nav-animation {
          animation: filter-animation 30s infinite alternate;
      }

      @keyframes filter-animation {
          0% {
              filter: hue-rotate(0deg);
          }

          50% {
              filter: hue-rotate(90deg);
          }

          100% {
              filter: hue-rotate(0deg);
          }
      }
  </style>
  <nav class="main-header navbar navbar-expand navbar-white navbar-light nav-animation" style="background: linear-gradient(90deg, #fe0a0a, #ef0f19 6.25%, #e01529 12.5%, #d11a38 18.75%, #c21f47 25%, #b32557 31.25%, #a42a66 37.5%, #952f75 43.75%, #863584 50%, #783a94 56.25%, #693fa3 62.5%, #5a44b2 68.75%, #4b4ac2 75%, #3c4fd1 81.25%, #2d54e0 87.5%, #1e5af0 93.75%, #0f5fff);">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link" style="color: #fff;" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">

          <li class="nav-item">
              <a class="nav-link" style="color: #fff;" data-widget="fullscreen" href="#" role="button">
                  <i class="fas fa-expand-arrows-alt"></i>
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" style="color: #fff;" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                  <i class="fas fa-th-large"></i>
              </a>
          </li>
      </ul>
  </nav>
  <!-- /.navbar -->