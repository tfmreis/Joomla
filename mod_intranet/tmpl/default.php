<?php 
/**
* @version		$Id: default.php 2018-08-13
* @package		Joomla
* @author		Thiago Reis
* @copyright	Copyright (C) 2018 - TFMREIS. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
*/
defined('_JEXEC') or die('Restricted access'); ?>


<form action="<?php echo $params->get('action'); ?>" method="post" name="intranet-login" id="intranet-login" >
  <fieldset class="inputIntranet">
  <p id="form-login-usuario">
    <label for="usuario"><?php echo JText::_('Usu&aacute;rio') ?></label><br />
    <input id="usuario" type="text" name="<?php echo $params->get('usuario'); ?>" class="inputbox" alt="usuario" size="25" />
  </p>
  <p id="form-login-senha">
    <label for="senha"><?php echo JText::_('Senha') ?></label><br />
    <input id="senha" type="password" name="<?php echo $params->get('senha'); ?>" class="inputbox" size="25" alt="password" />
  </p>

  <input type="submit" name="Submit" class="button" value="<?php echo JText::_('Entrar') ?>" />
  </fieldset>

  </form>