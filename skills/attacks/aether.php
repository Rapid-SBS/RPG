  <div class="row justify-content-center">

    <div id="attack-select" class="btn-group btn-toolbar btn-group-toggle">
      <!-- Void Fissure -->  
      <label class="btn text-white pad-10 mar-5 btn-blue" data-toggle="collapse" href="#collapseVoidfissure" role="button" aria-expanded="false" aria-controls="collapseVoidfissure">
        <input type="radio" name="ability" value="Void Fissure" v-model="attackSelection">
        <h6>Void Fissure</h6>
      </label>

      <!-- Light Shatter -->
      <label class="btn text-white pad-10 mar-5 btn-blue" data-toggle="collapse" href="#collapseLightshatter" role="button" aria-expanded="false" aria-controls="collapseLightshatter">
        <input type="radio" name="ability" value="Light Shatter" v-model="attackSelection">
        <h6>Light Shatter</h6>
      </label>
      <br>
      <h4 style="display: none;" id="attack-selection">{{attackSelection}}</h4>
    </div>
  </div><!-- /.row -->

  <div id="attack-aether" class="row mx-auto pad-10">

    <!-- Void Fissure -->
    <div class="collapse mx-auto" id="collapseVoidfissure" data-parent="#attack-aether">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Attack Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Channel energy from the shadow realm<br>and release it upon your enemy.<br>DMG = 2 x (Player INT).<br> Costs 5 Mana.</p> 
        </div>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

    <!-- Light Shatter -->
    <div class="collapse mx-auto" id="collapseLightshatter" data-parent="#attack-aether">
      <div class="card bg-light">
        <div class="card-header text-center">
          <h6>Attack Ability</h6>
        </div>
        <div class="card-body pad-5">
          <p class="card-text text-center">Hail shards of light upon all enemies.<br>Guaranteed Crit if enemy has Light Prism debuff.<br>DMG = Weapon ATT + Player INT.<br> Costs 6 Mana.</p>
        </div>
        <ul class="list-group list-group-flush text-center">
          <li class="list-group-item bg-light align-items-center" style="padding: .35rem 1.25rem;">
            <span class="badge bg-white text-orange">3</span>
            Weapon ATT
          </li>
        </ul>
      </div><!-- /.card -->
    </div><!-- /.collapse -->

<script>
$('label').click(function() {
   $(this).addClass("active")
          .siblings('label').removeClass("active");
});
</script>

  </div><!-- /.row -->