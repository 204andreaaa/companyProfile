<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Ecommerce Dashboard &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('admin/dist/assets/modules/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/dist/assets/modules/fontawesome/css/all.min.css')}}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{asset('admin/dist/assets/modules/jqvmap/dist/jqvmap.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/dist/assets/modules/summernote/summernote-bs4.css')}}">
  <link rel="stylesheet" href="{{asset('admin/dist/assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/dist/assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css')}}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{asset('admin/dist/assets/modules/datatables/datatables.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/dist/assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/dist/assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css')}}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('admin/dist/assets/css/style.css')}}">
  
  <link rel="stylesheet" href="{{asset('admin/dist/assets/css/style.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/dist/assets/css/components.css')}}">
<link rel="stylesheet" href="{{ asset('admin/dist/assets/css/custom.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
            <div class="search-result">
              <div class="search-header">
                Histories
              </div>
              <div class="search-item">
                <a href="#">How to hack NASA using CSS</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">Kodinger.com</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">#Stisla</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-header">
                Result
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="{{asset('admin/dist/assets/img/products/product-3-50.png')}}" alt="product">
                  oPhone S9 Limited Edition
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="{{asset('admin/dist/assets/img/products/product-2-50.png')}}" alt="product">
                  Drone X2 New Gen-7
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="{{asset('admin/dist/assets/img/products/product-1-50.png')}}" alt="product">
                  Headphone Blitz
                </a>
              </div>
              <div class="search-header">
                Projects
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-danger text-white mr-3">
                    <i class="fas fa-code"></i>
                  </div>
                  Stisla Admin Template
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-primary text-white mr-3">
                    <i class="fas fa-laptop"></i>
                  </div>
                  Create a new Homepage Design
                </a>
              </div>
            </div>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">

            <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    <img alt="image" src="{{ asset('admin/dist/assets/img/avatar/avatar-1.png') }}" class="rounded-circle mr-1">
                    <div class="d-sm-none d-lg-inline-block">
                        {{ auth()->user()->name }}
                    </div>
                </a>

                <div class="dropdown-menu dropdown-menu-right">

                    <div class="dropdown-title">
                        {{ auth()->user()->email }}
                    </div>

                    <a href="{{ route('admin.settings.user_admin') }}"
                      class="dropdown-item has-icon">
                        <i class="fas fa-user-cog"></i>
                        Account Settings
                    </a>

                    <div class="dropdown-divider"></div>

                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item has-icon text-danger border-0 bg-transparent w-100 text-left">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </button>
                    </form>

                </div>
            </li>

        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">BIMASAKTI</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">BS</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ request()->routeIs('admin.index') ? 'active' : '' }}">
                <a href="{{ route('admin.index') }}" class="nav-link">
                    <i class="fas fa-fire"></i> <span>Dashboard</span>
                </a>
            </li>

            <li class="menu-header">Content Management</li>

            <li class="{{ request()->routeIs('admin.homepage.*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.homepage.index') }}">
                <i class="fas fa-image"></i> <span>Homepage</span>
            </a>
            </li>

            <li class="{{ request()->routeIs('admin.about.*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.about.index') }}">
                <i class="fas fa-building"></i> <span>About Us</span>
            </a>
            </li>
            
            <!-- 
            <li class="{{ request()->routeIs('admin.values.*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.values.index') }}">
                <i class="fas fa-gem"></i> <span>Nilai Perusahaan</span>
            </a>
            </li>

            
            <li class="{{ request()->routeIs('admin.vision-mission.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.vision-mission.edit') }}">
                    <i class="fas fa-bullseye"></i> <span>Visi & Misi</span>
                </a>
            </li>
            -->

            <li class="{{ request()->routeIs('admin.products.*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.products.index') }}">
                <i class="fas fa-box"></i> <span>Produk Genset</span>
            </a>
            </li>

            <li class="{{ request()->routeIs('admin.posts.*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.posts.index') }}">
                <i class="fas fa-newspaper"></i> <span>Berita / Blog</span>
            </a>
            </li>

            <li class="{{ request()->routeIs('admin.projects.*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.projects.index') }}">
                <i class="fas fa-briefcase"></i> <span>Project</span>
            </a>
            </li>

            <li class="{{ request()->routeIs('admin.requests.*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.requests.index') }}">
                <i class="fas fa-images"></i> <span>Cust Required</span>
            </a>
            </li>


            <li class="{{ request()->routeIs('admin.messages.*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.messages.index') }}">
                <i class="fas fa-envelope"></i> <span>Pesan Kontak</span>
            </a>
            </li>

            <li class="{{ request()->routeIs('admin.service.*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.service.index') }}">
                <i class="fas fa-cogs"></i> <span>Layanan</span>
            </a>
            </li>

           <li class="{{ request()->routeIs('admin.settings*') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('admin.settings') }}">
                  <i class="fas fa-sliders-h"></i>
                  <span>Website Settings</span>
              </a>
          </li>

        </ul>
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
            @yield('content')
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">BernardBear</a>
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- General JS Scripts -->
  <script src="{{asset('admin/dist/assets/modules/jquery.min.js')}}"></script>
  <script src="{{asset('admin/dist/assets/modules/popper.js')}}"></script>
  <script src="{{asset('admin/dist/assets/modules/tooltip.js')}}"></script>
  <script src="{{asset('admin/dist/assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('admin/dist/assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
  <script src="{{asset('admin/dist/assets/modules/moment.min.js')}}"></script>
  <script src="{{asset('admin/dist/assets/js/stisla.js')}}"></script>
  
  <!-- JS Libraies -->
  <script src="{{asset('admin/dist/assets/modules/jquery.sparkline.min.js')}}"></script>
  <script src="{{asset('admin/dist/assets/modules/chart.min.js')}}"></script>
  <script src="{{asset('admin/dist/assets/modules/owlcarousel2/dist/owl.carousel.min.js')}}"></script>
  <script src="{{asset('admin/dist/assets/modules/summernote/summernote-bs4.js')}}"></script>
  <script src="{{asset('admin/dist/assets/modules/chocolat/dist/js/jquery.chocolat.min.js')}}"></script>

  <!-- Page Specific JS File -->
  <script src="{{asset('admin/dist/assets/js/page/index.js')}}"></script>

    <!-- JS Libraies -->
    <script src="{{asset('admin/dist/assets/modules/datatables/datatables.min.js')}}"></script>
    <script src="{{asset('admin/dist/assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin/dist/assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js')}}"></script>
    <script src="{{asset('admin/dist/assets/modules/jquery-ui/jquery-ui.min.js')}}"></script>

  <!-- Page Specific JS File -->
  <script src="{{asset('admin/dist/assets/js/page/modules-datatables.js')}}"></script>

  <!-- CKEditor -->
  <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
  
  <!-- Template JS File -->
  <script src="{{asset('admin/dist/assets/js/scripts.js')}}"></script>
  <script src="{{asset('admin/dist/assets/js/custom.js')}}"></script>
  <script>
    (() => {
      const pendingInputs = new WeakMap();

      function getSubmitButtons(form) {
        return Array.from(form.querySelectorAll('button[type="submit"], input[type="submit"]'));
      }

      function setFormBusy(form, busy) {
        getSubmitButtons(form).forEach((button) => {
          button.disabled = busy;
          if (busy && !button.dataset.originalLabel) {
            button.dataset.originalLabel = button.tagName === 'INPUT' ? button.value : button.innerHTML;
            if (button.tagName === 'INPUT') {
              button.value = 'Memproses gambar...';
            } else {
              button.innerHTML = 'Memproses gambar...';
            }
          } else if (!busy && button.dataset.originalLabel) {
            if (button.tagName === 'INPUT') {
              button.value = button.dataset.originalLabel;
            } else {
              button.innerHTML = button.dataset.originalLabel;
            }
            delete button.dataset.originalLabel;
          }
        });
      }

      function canOptimize(file) {
        return file && file.type.startsWith('image/') && !['image/svg+xml', 'image/gif'].includes(file.type);
      }

      function fileNameWithExtension(fileName, extension) {
        const cleanExtension = extension.replace(/^\./, '');
        const baseName = fileName.replace(/\.[^/.]+$/, '');
        return `${baseName}.${cleanExtension}`;
      }

      function canvasToBlob(canvas, type, quality) {
        return new Promise((resolve) => canvas.toBlob(resolve, type, quality));
      }

      function loadBitmap(file) {
        if ('createImageBitmap' in window) {
          return createImageBitmap(file);
        }

        return new Promise((resolve, reject) => {
          const image = new Image();
          const objectUrl = URL.createObjectURL(file);

          image.onload = () => {
            URL.revokeObjectURL(objectUrl);
            resolve(image);
          };

          image.onerror = () => {
            URL.revokeObjectURL(objectUrl);
            reject(new Error('Gagal membaca gambar.'));
          };

          image.src = objectUrl;
        });
      }

      async function optimizeFile(file, input) {
        if (!canOptimize(file)) {
          return file;
        }

        const bitmap = await loadBitmap(file);
        const maxWidth = Number(input.dataset.maxWidth || 1920);
        const maxHeight = Number(input.dataset.maxHeight || 1920);
        const ratio = Math.min(maxWidth / bitmap.width, maxHeight / bitmap.height, 1);
        const width = Math.max(1, Math.round(bitmap.width * ratio));
        const height = Math.max(1, Math.round(bitmap.height * ratio));

        const canvas = document.createElement('canvas');
        canvas.width = width;
        canvas.height = height;

        const ctx = canvas.getContext('2d', { alpha: true });
        ctx.drawImage(bitmap, 0, 0, width, height);
        if (typeof bitmap.close === 'function') {
          bitmap.close();
        }

        const outputType = file.type === 'image/png' ? 'image/png' : 'image/webp';
        const quality = Number(input.dataset.quality || 0.82);
        const blob = await canvasToBlob(canvas, outputType, quality);

        if (!blob || blob.size >= file.size) {
          return file;
        }

        const extension = outputType === 'image/png' ? 'png' : 'webp';

        return new File([blob], fileNameWithExtension(file.name, extension), {
          type: outputType,
          lastModified: Date.now(),
        });
      }

      async function optimizeInput(input) {
        const files = Array.from(input.files || []);

        if (!files.length) {
          return;
        }

        const form = input.form;
        if (form) {
          setFormBusy(form, true);
        }

        try {
          const optimizedFiles = await Promise.all(files.map((file) => optimizeFile(file, input)));
          const dataTransfer = new DataTransfer();

          optimizedFiles.forEach((file) => dataTransfer.items.add(file));
          input.files = dataTransfer.files;
        } finally {
          pendingInputs.delete(input);
          if (form) {
            setFormBusy(form, false);
          }
        }
      }

      document.addEventListener('change', (event) => {
        const input = event.target;

        if (!(input instanceof HTMLInputElement) || input.type !== 'file') {
          return;
        }

        const hasImageFiles = Array.from(input.files || []).some(canOptimize);
        if (!hasImageFiles) {
          return;
        }

        const pending = optimizeInput(input);
        pendingInputs.set(input, pending);
      });
    })();
  </script>
  
  @stack('modals')
  @stack('scripts')
</body>
</html>
