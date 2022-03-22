<?php dump($voice)?>
                    <?php if(!empty($voice[0]['meanings'][0]['definitions'])):?>
                        <?= '<p><strong>Type: </strong>'.$voice[0]['meanings'][0]['partOfSpeech'].'<p/>';?>
                        <?= '<p><strong>Definition: </strong>'.$voice[0]['meanings'][0]['definitions'][0]['definition'].'<p/>';?>
                        <?= '<p><strong>Example: </strong>'.contain($_GET['search'],$voice[0]['meanings'][0]['definitions'][0]['example']).'<p/>';?>
                    <?php endif;?>