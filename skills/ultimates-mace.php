  <div class="row justify-content-center">

    <!-- Hammer of Dawn -->
    <a class="btn text-white pad-10 mar-5 bg-purple" data-toggle="collapse" href="#collapseHammerofdawn" role="button" aria-expanded="false" aria-controls="collapseHammerofdawn">
      <h6>Hammer of Dawn <span class="badge badge-light text-teal">10</span></h6>
    </a>

    <!-- Dawn Guardian -->  
    <a class="btn text-white pad-10 mar-5 bg-purple" data-toggle="collapse" href="#collapseDawnguardian" role="button" aria-expanded="false" aria-controls="collapseDawnguardian">
      <h6>Dawn Guardian <span class="badge badge-light text-teal">10</span></h6>
    </a>

  </div><!-- /.row -->

  <div id="ultimate-mace" class="row mx-auto pad-10">

    <!-- Hammer of Dawn -->
    <div class="collapse mx-auto" id="collapseHammerofdawn" data-parent="#ultimate-mace">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Ultimate Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Pillars of light fall from the heavens<br>and crash down upon your enemies.<br>Ignores enemy RES.<br>DMG = 3 x (Player INT).<br>Costs 10 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            Enemy RES = <span class="badge bg-white text-teal">0</span>
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Dawn Guardian -->
    <div class="collapse mx-auto" id="collapseDawnguardian" data-parent="#ultimate-mace">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Ultimate Ability</h6>
        </div>
        <div class="card-body pad-5">
           <p class="card-text text-center">Invoke the sacred power of the Dawn Guardian,<br>greatly increasing ally defenses for 1 turn.<br> Costs 10 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-green">+6</span>
            Bonus DEF
          </li>
        </ul>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-blue">+6</span>
            Bonus RES
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->