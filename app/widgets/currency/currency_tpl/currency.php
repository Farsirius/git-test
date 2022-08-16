<div class="dropdown_text"><?=$this->currency['code'];?></div>
                                        <!-- Currencies Dropdown Menu -->
					<div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
                                        <ul >
                                        <?php foreach ($this->currencies as $key => $value): ?>
                                             <?php if($key != $this->currency['code']): ?>
					 	<li><a href="/currency/change?curr=<?=$key;?>"><div class="dropdown_text"><?=$key;?></div></a></li>
                                             <?php endif; ?>
                                        <?php endforeach; ?>
					 </ul>