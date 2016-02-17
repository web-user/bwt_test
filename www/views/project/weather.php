<?php defined('MVCproject') or die('Access denied'); ?>
	<article>
		<div class="post-image">
			<div class="post-heading">
				<h2>Weather</h2>
			</div><!-- .post-heading -->
		</div>
		<div class="row">
			<div class="col-m-d-12">
				<?php if($_SESSION['auth']['user']): ?>
					<p>Weather is shown only on this site to change the settings, click on the link will <a target="_blank" href="https://www.gismeteo.ua/informers/constructor/#44f3ywf2n8RV44/single">Gismeteo</a> </p>
					<!-- Gismeteo informer START -->
					<link rel="stylesheet" type="text/css" href="https://s1.gismeteo.ua/static/css/informer2/gs_informerClient.min.css">
					<div id="gsInformerID-007D4yUJhga54n" class="gsInformer" style="width:240px;height:101px">
					  <div class="gsIContent">
					   <div id="cityLink">
					     <a href="https://www.gismeteo.ua/weather-zaporizhzhya-5093/" target="_blank">Погода в Запорожье</a>
					   </div>
					   <div class="gsLinks">
					     <table>
					       <tr>
					         <td>
					           <div class="leftCol">
					             <a href="https://www.gismeteo.ua" target="_blank">
					               <img alt="Gismeteo" title="Gismeteo" src="https://s1.gismeteo.ua/static/images/informer2/logo-mini2.png" align="absmiddle" border="0" />
					               <span>Gismeteo</span>
					             </a>
					           </div>
					           <div class="rightCol">
					             <a href="https://www.gismeteo.ua/weather-zaporizhzhya-5093/14-days/" target="_blank">Погода на 2 недели</a>
					           </div>
					           </td>
					        </tr>
					      </table>
					    </div>
					  </div>
					</div>
					<script src="https://www.gismeteo.ua/ajax/getInformer/?hash=007D4yUJhga54n" type="text/javascript"></script>
					<!-- Gismeteo informer END -->
				<?php else: ?>
					<h2>To view the file you need to create an account!</h2>
				<?php endif; ?>
			</div>
		</div>
	</article>


