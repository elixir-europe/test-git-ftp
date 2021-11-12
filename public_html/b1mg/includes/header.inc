<!DOCTYPE html>
    <html>
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $title; ?></title>
        <meta name="description" content="<?php echo $description; ?>">
        <link rel="apple-touch-icon" sizes="180x180" href="/b1mg/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/b1mg/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/b1mg/favicon-16x16.png">
        <link rel="manifest" href="/b1mg/site.webmanifest">
        <script src="/b1mg/js/toggle-menu.js"></script>
        <link rel="stylesheet" href="/b1mg/css/main.css">
        <link rel="stylesheet" href="/b1mg/css/icofont.min.css">
      </head>
      <body>
        <nav class="navbar" role="navigation" aria-label="main navigation">
          <div class="container" id="nav-container">
            <div class="navbar-brand">
              <a href="https://b1mg-project.eu">
                <img src="/b1mg/images/b1mg-logo.png" width="130" alt="B1MG logo" id="logo" />
              </a>
              <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="mainNavBar">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
              </a>
            </div>

            <div id="mainNavBar" class="navbar-menu">
              <div class="navbar-start">
                <a href="/b1mg/" class="navbar-item px-4<?php echo ($section == 'home')? ' is-active' : ''; ?>">
                  Home
                </a>
                <div class="navbar-item has-dropdown is-hoverable">
                  <a href="/b1mg/about/" class="navbar-link<?php echo ($section == 'about')? ' is-active' : ''; ?>">
                    About
                  </a>
                  <div class="navbar-dropdown">
                    <a href="/b1mg/about/how-organised" class="navbar-item<?php echo ($page == 'how-organised')? ' is-active' : ''; ?>">
                      How the project is organised
                    </a>
                    <a href="/b1mg/about/objectives" class="navbar-item<?php echo ($page == 'objectives')? ' is-active' : ''; ?>">
                      Objectives and key results
                    </a>
                    <a href="/b1mg/about/participants" class="navbar-item">
                      Participants
                    </a>
                    <a href="/b1mg/about/guide-science" class="navbar-item<?php echo ($page == 'guide-science')? ' is-active' : ''; ?>">
                      Simple guide to the science
                    </a>
                    <a href="/b1mg/about/glossary" class="navbar-item<?php echo ($page == 'glossary')? ' is-active' : ''; ?>">
                      Glossary
                    </a>
                  </div>
                </div>
                <div class="navbar-item has-dropdown is-hoverable">
                  <a href="/b1mg/work-packages/" class="navbar-link<?php echo ($section == 'work-packages')? ' is-active' : ''; ?>">
                    Work Packages
                  </a>
                  <div class="navbar-dropdown">
                    <a href="/b1mg/work-packages/wp1" class="navbar-item<?php echo ($page == 'wp1')? ' is-active' : ''; ?>">
                      WP1: Stakeholders engagement
                    </a>
                    <a href="/b1mg/work-packages/wp2" class="navbar-item<?php echo ($page == 'wp2')? ' is-active' : ''; ?>">
                      WP2: Ethical, Legal and Social Issues
                    </a>
                    <a href="/b1mg/work-packages/wp3" class="navbar-item<?php echo ($page == 'wp3')? ' is-active' : ''; ?>">
                      WP3: Standards and quality guidleines
                    </a>
                    <a href="/b1mg/work-packages/wp4" class="navbar-item<?php echo ($page == 'wp4')? ' is-active' : ''; ?>">
                      WP4: Technical infrastructure
                    </a>
                    <a href="/b1mg/work-packages/wp5" class="navbar-item<?php echo ($page == 'wp5')? ' is-active' : ''; ?>">
                      WP5: Personalised medicine and impact
                    </a>
                    <a href="/b1mg/work-packages/wp6" class="navbar-item<?php echo ($page == 'wp6')? ' is-active' : ''; ?>">
                      WP6: Coordination Office
                    </a>
                  </div>
               </div>
                <a href="/b1mg/resources/" class="navbar-item px-4<?php echo ($section == 'resources')? ' is-active' : ''; ?>">
                  Resources
                </a>
                <a href="/b1mg/news-events/" class="navbar-item px-4<?php echo ($section == 'news-events')? ' is-active' : ''; ?>">
                  News & events
                </a>
                <a href="/b1mg/1mg/" class="navbar-item px-4<?php echo ($section == '1mg')? ' is-active' : ''; ?>">
                  Support to 1+MG
                </a>
                </div>
              </div>
        </div>
      </nav>
