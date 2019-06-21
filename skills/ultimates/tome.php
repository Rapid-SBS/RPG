  <div class="row justify-content-center">

    <div id="ultimate-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Divine Judgement -->  
      <label class="btn text-white pad-10 mar-5 btn-purple" data-toggle="collapse" href="#collapseDivinejudgement" role="button" aria-expanded="false" aria-controls="collapseDivinejudgement">
        <input type="radio" name="ability" value="Divine Judgement" v-model="ultimateSelection">
        <h6>Divine Judgement</h6>
      </label>

      <!-- Mass Revive -->
      <label class="btn text-white pad-10 mar-5 btn-purple" data-toggle="collapse" href="#collapseMassrevive" role="button" aria-expanded="false" aria-controls="collapseMassrevive">
        <input type="radio" name="ability" value="Mass Revive" v-model="ultimateSelection">
        <h6>Mass Revive</h6>
      </label>
      <br>
      <p class="jhide" id="ultimate-selection">{{ultimateSelection}}</p>
    </div>
  </div><!-- /.row -->

  <div id="ultimate-tome" class="row mx-auto pad-10 max-wide-380">

    <!-- Divine Judgement -->
    <div class="collapse mx-auto" id="collapseSkullbash" data-parent="#ultimate-tome">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Ultimate Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Call forth radiant light to bless your allies while punishing your enemies.<br>Ignores all enemy RES.<br>HEAL/DMG = Weapon ATT.<br> Costs 10 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-orange">10</span>
            Weapon ATT
          </li>
        </ul>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            Enemy RES = <span class="badge bg-white text-teal">0</span>
            </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Mass Revive -->
    <div class="collapse mx-auto" id="collapseMassrevive" data-parent="#ultimate-tome">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Ultimate Ability</h6>
        </div>
        <div class="card-body pad-5">
           <p class="card-text text-center">Revive all fallen allies with full HP, but no Mana.<br> Costs 14 Mana.</p>
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->