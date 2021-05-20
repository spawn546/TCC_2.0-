<?php foreach ($item as $item) { ?>                 
                  <?php
                     $item_dados = explode('#', $item);
                    if($_SESSION['perfil_id'] == 2){
                        if($item_dados[0] != $_SESSION['id']){
                          continue;
                        }
                    }
                    if(count($item_dados)<3){
                      continue;
                    }
                  ?>
                        <div id="inventario">
                          <h3 class="titulo_anot">Inventário</h3>
                          <table id="table_inventario">
                              <tr>
                                <th>Nome</th>
                                <th>Tipo</th>
                                <th>Dano</th>
                              </tr>
                              <tr>
                                  <td><?= $item_dados[1] ?></td>
                                  <td><?= $item_dados[2] ?></td>
                                  <td><?= $item_dados[2] ?></td>
                              </tr>
                          </table>
                      </div>
              <?php } ?>