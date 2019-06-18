  <div class="row justify-content-center">

    <!-- Ward Rune -->
    <a class="btn text-white pad-10 mar-5 bg-blue" data-toggle="collapse" href="#collapseWardrune" role="button" aria-expanded="false" aria-controls="collapseWardrune">
      <h6>Ward Rune <span class="badge badge-light text-teal">4</span></h6>
    </a>

    <!-- Healing Rune -->  
    <a class="btn text-white pad-10 mar-5 bg-blue" data-toggle="collapse" href="#collapseHealingrune" role="button" aria-expanded="false" aria-controls="collapseHealingrune">
      <h6>Healing Rune <span class="badge badge-light text-teal">5</span></h6>
    </a>

  </div><!-- /.row -->

  <div id="support-runestone" class="row mx-auto pad-10">

    <!-- Ward Rune -->
    <div class="collapse mx-auto" id="collapseWardrune" data-parent="#support-runestone">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Support Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Cast a ward rune to protect all allies.<br>Raises RES for 2 turns.<br> Costs 4 Mana.</p>
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
          <p class="card-text text-center">Cast a healing rune, restoring health to all allies.<br>HEAL = 3 HP.<br> Costs 5 Mana.</p> 
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

  </div><!-- /.row -->