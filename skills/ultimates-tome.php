  <div class="row justify-content-center">

    <!-- Divine Judgement -->
    <a class="btn text-white pad-10 mar-5 bg-purple" data-toggle="collapse" href="#collapseSkullbash" role="button" aria-expanded="false" aria-controls="collapseSkullbash">
      <h6>Divine Judgement <span class="badge badge-light text-teal">10</span></h6>
    </a>

    <!-- Mass Revive -->  
    <a class="btn text-white pad-10 mar-5 bg-purple" data-toggle="collapse" href="#collapseMassrevive" role="button" aria-expanded="false" aria-controls="collapseMassrevive">
      <h6>Mass Revive <span class="badge badge-light text-teal">15</span></h6>
    </a>

  </div><!-- /.row -->

  <div id="ultimate-tome" class="row mx-auto pad-10">

    <!-- Divine Judgement -->
    <div class="collapse mx-auto" id="collapseSkullbash" data-parent="#ultimate-tome">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Ultimate Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Call forth radiant light to bless your<br>allies while punishing your enemies.<br>Ignores all enemy RES.<br>HEAL = Weapon ATT.<br> DMG = Weapon ATT.<br> Costs 12 Mana.</p>
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