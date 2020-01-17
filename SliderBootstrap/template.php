<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); 
$this->setFrameMode(true); 
$i = 1; 
?> 
<div class="slider">
	<div class="container">
		<div class="row otstup">
			<div class="col-md-12">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 
					<div class="carousel-inner"> 

						<?foreach($arResult["ITEMS"] as $arItem):?> 
						<?$item=$i++;?> 
						<div class="item <?if($item == 1){?>active<?}?>"> 
							<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"> 
							<div class="carousel-caption"></div> 
						</div> 
						<?endforeach;?> 

						<!-- Controls --> 
						<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"> 
							<span class="glyphicon glyphicon-chevron-left"></span> 
						</a> 
						<a class="right carousel-control" href="#carousel-example-generic" data-slide="next"> 
							<span class="glyphicon glyphicon-chevron-right"></span> 
						</a> 
					</div> 
				</div>
			</div>
		</div>
	</div>
</div>
