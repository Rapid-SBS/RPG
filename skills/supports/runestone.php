  <div class="row justify-content-center">

    <div id="support-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Ward Rune -->  
      <label class="btn text-white pad-10 mar-5 btn-green" data-toggle="collapse" href="#collapseWardrune" role="button" aria-expanded="false" aria-controls="collapseWardrune"><input type="radio" name="picked" value="Ward Rune" v-model="supportSelection">
        <h6>Ward Rune</h6>
      </label>

      <!-- Healing Rune -->
      <label class="btn text-white pad-10 mar-5 btn-green" data-toggle="collapse" href="#collapseHealingrune" role="button" aria-expanded="false" aria-controls="collapseHealingrune">
        <input type="radio" name="picked" value="Healing Rune" v-model="supportSelection">
        <h6>Healing Rune</h6>
      </label>
      <br>
      <p class="jhide" id="support-selection">{{supportSelection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="support-runestone" class="row mx-auto pad-10 max-wide-380">

    <!-- Ward Rune -->
    <div class="collapse mx-auto" id="collapseWardrune" data-parent="#support-runestone">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Support Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Cast a Ward Rune to protect all allies.<br>Raises RES for 2 turns.<br> Costs 4 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-blue">+2</span>
            Ally RES
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Healing Rune -->
    <div class="collapse mx-auto" id="collapseHealingrune" data-parent="#support-runestone">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Support Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Cast a Healing Eune, restoring health to all allies.<br>HEAL = 3 HP.<br> Costs 5 Mana.</p> 
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->