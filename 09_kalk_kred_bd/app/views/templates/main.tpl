<!doctype html>
<html lang="pl">
<head>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="{$page_description|default:"Opis domyślny"}">

  <title>{$page_title|default:"Tytuł domyślny"}</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/grids-responsive-min.css">
  <link rel="stylesheet" href="{$conf->app_url}/styles/styles.css" />

	<script src="{$conf->app_url}/js/jquery.min.js"></script>
	<script src="{$conf->app_url}/js/softscroll.js"></script>

</head>
<body>
    <div class="page">
        <div class="header">
            <div class="pure-menu pure-menu-horizontal">
              <a href="{$conf->action_url}startPageShow" class="pure-menu-heading">Kalkulator kredytowy</a>
      
              <ul class="pure-menu-list">

                <li class="pure-menu-item {if $page_title=='Strona startowa'}pure-menu-selected{/if}">
                  <a href="{$conf->action_url}startPageShow" class="pure-menu-link">
                    {if $page_title == 'Strona startowa'}
                        Strona startowa
                    {/if}
                    {if $page_title != 'Strona startowa'}
                        Przejdź do strony startowej
                    {/if}
                  </a>
                </li>

                <li class="pure-menu-item {if $page_title=='Kalkulator kredytowy'}pure-menu-selected{/if}">
                  <a href="{$conf->action_url}calcShow" class="pure-menu-link">
                    {if $page_title=='Kalkulator kredytowy'}
                        Kalkulator
                    {/if}
                    {if $page_title!='Kalkulator kredytowy'}
                        Przejdź do kalkulatora
                    {/if}
                  </a>
                </li>

                <li class="pure-menu-item {if $page_title=='Lista rekordów'}pure-menu-selected{/if}">
                  <a href="{$conf->action_url}resList" class="pure-menu-link">
                    {if $page_title=='Lista rekordów'}
                        Lista rekordów
                    {/if}
                    {if $page_title!='Lista rekordów'}
                        Przejdź do listy rekordów
                    {/if}
                  </a>
                </li>

                <li class="pure-menu-item">
                  {if isset($user)}
                    <a href="{$conf->action_url}logout" class="pure-menu-link" style="background-color: red; color: white;">
                      Wyloguj
                    </a>
                  {/if}
                </li>

              </ul>
            </div>
        </div>

        {block name=start_page} {/block}
        {block name=kalk_kred} {/block}
        {block name=login_form} {/block}
        {block name=res_list} {/block}

        <div class="footer">
          messi to goat
        </div>
    </div>
</body>
</html>