<?php
/* Smarty version 5.4.2, created on 2025-04-01 09:53:02
  from 'file:StartPageView.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67eb9b5e6b4fe7_71125539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '845d6d54e936345cc3e692e509530dace7227e37' => 
    array (
      0 => 'StartPageView.tpl',
      1 => 1743492640,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67eb9b5e6b4fe7_71125539 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\scig\\07_kalk_kred_namespaces\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_128696145867eb9b5e6ad6f3_09353703', 'start_page');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "templates/main.tpl", $_smarty_current_dir);
}
/* {block 'start_page'} */
class Block_128696145867eb9b5e6ad6f3_09353703 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\scig\\07_kalk_kred_namespaces\\app\\views';
?>


<div>

    <div class="pure-g">
      <div class="photo-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-3">
        <img
          src="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/images/chill-guy.webp"
          alt="chill guy"
        />
      </div>

      <div class="text-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-3">
        <div class="l-box">
          <h1 class="text-box-head">Galeria</h1>
          <p class="text-box-subhead">
            Kilka zdjęć i wideo
          </p>
        </div>
      </div>

      <div class="photo-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-3">
          <img
            src="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/images/mbape.png"
            alt="embape"
          />
        </div>

      <div class="photo-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-3">
        <img
          src="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/images/lamin.jpg"
          alt="lamine yamale"
        />
      </div>

      <div class="photo-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-3">
        <video autoplay loop muted playsinline>
          <source src="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/images/dembusz.mp4" type="video/mp4">
        </video>
      </div>

      <div class="photo-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-3">
        <img
          src="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/images/mesi_world_cup.jpg"
          alt="ankara mesi"
        />
      </div>

      <div class="photo-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-3">
        <img
          src="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/images/kun.jpeg"
          alt="bosiekuniaboje"
        />
      </div>

      <div class="photo-box photo-box-thin pure-u-1 pure-u-md-1-3">
        <img
          src="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/images/plansza.jpg"
          alt="plansza"
        />
      </div>

      <div class="photo-box photo-box-thin pure-u-1 pure-u-md-1-3">
        <img
          src="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/images/zeju.png"
          alt="zejupoooog"
        />
      </div>
    </div>

</div>

<?php
}
}
/* {/block 'start_page'} */
}
