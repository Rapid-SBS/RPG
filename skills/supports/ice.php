  <div class="row justify-content-center">

    <div id="support-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Cryopod -->  
      <label class="btn text-white pad-10 mar-5 btn-green" data-toggle="collapse" href="#collapseCryopod" role="button" aria-expanded="false" aria-controls="collapseCryopod"><input type="radio" name="picked" value="Cryopod" v-model="supportSelection">
        <h6>Cryopod</h6>
      </label>

      <!-- Ice Armor -->
      <label class="btn text-white pad-10 mar-5 btn-green" data-toggle="collapse" href="#collapseIcearmor" role="button" aria-expanded="false" aria-controls="collapseIcearmor">
        <input type="radio" name="picked" value="Ice Armor" v-model="supportSelection">
        <h6>Ice Armor</h6>
      </label>
      <br>
      <p class="jhide" id="support-selection">{{supportSelection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="support-ice" class="row mx-auto pad-10 max-wide-380">

    <!--Cryopod -->
    <div class="collapse mx-auto" id="collapseCryopod" data-parent="#support-ice">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Support Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Encase yourself in ice for 2 turns.<br>You are immune to damage but unable to attack.<br>Fully restores your health.<br> Costs 6 Mana.</p>
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Ice Armor -->
    <div class="collapse mx-auto" id="collapseIcearmor" data-parent="#support-ice">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Support Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Equip yourself or an ally with a suit of Ice Armor for 2 turns.<br> Costs 6 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-green">+3</span>
            Bonus DEF
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->