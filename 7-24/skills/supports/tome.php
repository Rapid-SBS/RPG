  <div class="row justify-content-center">

    <div id="support-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Mana Infusion -->  
      <label class="btn text-white pad-10 mar-5 btn-green" data-toggle="collapse" href="#collapseManainfusion" role="button" aria-expanded="false" aria-controls="collapseManainfusion"><input type="radio" name="picked" value="Mana Infusion" v-model="supportSelection">
        <h6>Mana Infusion</h6>
      </label>

      <!-- Restore -->
      <label class="btn text-white pad-10 mar-5 btn-green" data-toggle="collapse" href="#collapseRestore" role="button" aria-expanded="false" aria-controls="collapseRestore">
        <input type="radio" name="picked" value="Restore" v-model="supportSelection">
        <h6>Restore</h6>
      </label>
      <br>
      <p class="jhide" id="support-selection">{{supportSelection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="support-tome" class="row mx-auto pad-10 max-wide-380">

    <!--Mana Infusion -->
    <div class="collapse mx-auto" id="collapseManainfusion" data-parent="#support-tome">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Support Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Infuse an ally with mana.<br>Costs 5 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-teal">+8</span>
            Ally Mana
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Restore -->
    <div class="collapse mx-auto" id="collapseRestore" data-parent="#support-tome">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Support Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Heal an ally and remove their debuffs.<br>HEAL = Weapon ATT + Player INT.<br> Costs 6 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-orange">5</span>
            Weapon ATT
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->