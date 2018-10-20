<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin Free Bootstrap Admin Dashboard Template</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('vendors/iconfonts/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.base.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.addons.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.fileuploader.min.css') }}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('css/admin/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('img/admin/favicon.png') }}" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html">
          <img src="{{ asset('img/logo.png') }}" alt="logo" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="index.html">
          <img src="{{ asset('img/logo.png') }}" alt="logo" />
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <!-- <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
          <li class="nav-item">
            <a href="#" class="nav-link">Schedule
              <span class="badge badge-primary ml-1">New</span>
            </a>
          </li>
          <li class="nav-item active">
            <a href="#" class="nav-link">
              <i class="mdi mdi-elevation-rise"></i>Reports</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="mdi mdi-bookmark-plus-outline"></i>Score</a>
          </li>
        </ul> -->
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <i class="mdi mdi-file-document-box"></i>
              <span class="count">7</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
              <div class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">You have 7 unread mails
                </p>
                <span class="badge badge-info badge-pill float-right">View all</span>
              </div>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="{{ asset('img/admin/faces/face4.jpg') }}" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium text-dark">David Grey
                    <span class="float-right font-weight-light small-text">1 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="{{ asset('img/admin/faces/face2.jpg') }}" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium text-dark">Tim Cook
                    <span class="float-right font-weight-light small-text">15 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    New product launch
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="{{ asset('img/admin/faces/face3.jpg') }}" alt="image" class="profile-pic') }}">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium text-dark"> Johnson
                    <span class="float-right font-weight-light small-text">18 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-bell"></i>
              <span class="count">4</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <a class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">You have 4 new notifications
                </p>
                <span class="badge badge-pill badge-warning float-right">View all</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="mdi mdi-alert-circle-outline mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium text-dark">Application Error</h6>
                  <p class="font-weight-light small-text">
                    Just now
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="mdi mdi-comment-text-outline mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium text-dark">Settings</h6>
                  <p class="font-weight-light small-text">
                    Private message
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="mdi mdi-email-outline mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium text-dark">New user registration</h6>
                  <p class="font-weight-light small-text">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text">Dobrý deň, {{ Auth::user()->username }}!</span>
              <img class="img-xs rounded-circle" src="{{ asset('img/admin/faces/face1.jpg') }}" alt="Profile image">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a class="dropdown-item p-0">
                <div class="d-flex border-bottom">
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                    <i class="mdi mdi-account-outline mr-0 text-gray"></i>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="mdi mdi-alarm-check mr-0 text-gray"></i>
                  </div>
                </div>
              </a>
              <a class="dropdown-item mt-2">
                Manage Accounts
              </a>
              <a class="dropdown-item">
                Change Password
              </a>
              <a class="dropdown-item">
                Check Inbox
              </a>
              <a href="{{ URL::to('logout') }}" class="dropdown-item">
                Odhlásiť sa
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="{{ asset('img/admin/faces/face1.jpg') }}" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">{{ Auth::user()->username }}</p>
                  <div>
                    <small class="designation text-muted">{{ Auth::user()->admin ? "Administrátor" : "Správca" }}</small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
              <a class="nav-link" href="{{ URL::to('admin/products/new') }}">
                <button class="btn btn-success btn-block">Nový produkt
                  <i class="mdi mdi-plus"></i>
                </button>
              </a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ URL::to('admin') }}">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Nástenka</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Produkty</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{ URL::to('admin/products') }}">Zoznam produktov</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ URL::to('admin/products/new') }}">Pridať produkt</a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">


            @yield('content')


        </div>
        <!-- content-wrapper ends -->

              <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
              <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with
              <i class="mdi mdi-heart text-danger"></i>
            </span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>
  <script src="{{ asset('vendors/js/vendor.bundle.addons.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{ asset('js/admin/off-canvas.js') }}"></script>
  <script src="{{ asset('js/admin/misc.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('js/admin/dashboard.js') }}"></script>
  <script src="https://cdn.tinymce.com/4/tinymce.min.js"></script>
  <script src="{{ asset('js/jquery.fileuploader.min.js') }}"></script>
  <script type="text/javascript">
    $('.file-uploader-add').fileuploader({
      extensions: ['jpg', 'jpeg', 'png'],
      addMore: true,
      fileMaxSize: 2,
      editor: {
          // editor cropper
          cropper: {
              // cropper ratio
              // example: null
              // example: '1:1'
              // example: '16:9'
              // you can also write your own
              ratio: '4:3',

              // cropper minWidth in pixels
              // size is adjusted with the image natural width
              minWidth: null,

              // cropper minHeight in pixels
              // size is adjusted with the image natural height
              minHeight: null,

              // show cropper grid
              showGrid: true
          },

          // editor on save quality (0 - 100)
          // only for client-side resizing
          quality: null,

          // editor on save maxWidth in pixels
          // only for client-side resizing
          maxWidth: null,

          // editor on save maxHeight in pixels
          // only for client-size resizing
          maxHeight: null,

          // Callback fired after saving the image in editor
          onSave: function(blobOrDataUrl, item, listEl, parentEl, newInputEl, inputEl) {
            //item.editor.save(callback, asBlob, mimeType, preventThumbnailRender);
          }
      },
      captions: {
          button: function(options) { return 'Vybrať ' + (options.limit == 1 ? 'súbor' : 'súbory'); },
          feedback: function(options) { return 'Vybrať ' + (options.limit == 1 ? 'súbor' : 'súbory') + ' na nahratie'; },
          feedback2: function(options) { return options.length + ' ' + (options.length > 1 ? ' obrázkov bolo vybratých' : ' obrázok bol vybratý'); },
          confirm: 'Potvrdiť',
          cancel: 'Zrušiť',
          name: 'Meno',
          type: 'Typ',
          size: 'Veľkosť',
          dimensions: 'Rozmery',
          duration: 'Trvanie',
          crop: 'Zrezať',
          rotate: 'Otočiť',
          sort: 'Zotriediť',
          download: 'Stiahnuť',
          remove: 'Odstrániť',
          drop: 'Presuňte obrázky sem pre nahratie',
          paste: '<div class="fileuploader-pending-loader"></div> Nahráva sa súbor, kliknite sem pre zrušenie',
          removeConfirmation: 'Naozaj chcete odstrániť tento súbor?',
          errors: {
              filesLimit: 'Len ${limit} súborov je povolených na nahratie.',
              filesType: 'Len ${extensions} súbory sú povolené na nahratie.',
              fileSize: '${name} je príliš veľký! Prosím, vyberte súbor s veľkosťou maximálne ${fileMaxSize}MB.',
              filesSizeAll: 'Vybraté súbory sú príliš veľké! Prosím, nahrajte súbory vo veľkosti maximálne ${maxSize} MB.',
              fileName: 'Súbor s menom ${name} je už vybratý na nahratie.',
              folderUpload: 'Nie je povolené nahrávať celé zložky.'
          }
      },
      // Callback fired on selecting and processing a file
      onSelect: function(item, listEl, parentEl, newInputEl, inputEl) {
          if (item.reader.ratio != '4:3') {
            alert("Pred uložením príspevku, prosím, použite editor kliknutím na obrázok, a obrázok zrežte!")
          }
      },
      enableApi: true,
    });
  </script>
  <script>
    var editor_config = {
      entity_encoding : "raw",
      path_absolute : "/",
      selector: "textarea.description-editor",
      language_url: "https://olli-suutari.github.io/tinyMCE-4-translations/sk.js",
      plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor colorpicker textpattern"
      ],
      toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
      relative_urls: false,
      file_browser_callback : function(field_name, url, type, win) {
        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
        var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

        var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
        if (type == 'image') {
          cmsURL = cmsURL + "&type=Images";
        } else {
          cmsURL = cmsURL + "&type=Files";
        }

        tinyMCE.activeEditor.windowManager.open({
          file : cmsURL,
          title : 'Filemanager',
          width : x * 0.8,
          height : y * 0.8,
          resizable : "yes",
          close_previous : "no"
        });
      }
    };

    tinymce.init(editor_config);
  </script>
  <!-- End custom js for this page-->
</body>

</html>