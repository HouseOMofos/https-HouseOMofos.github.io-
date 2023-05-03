{{-- JOVAN --}}
<div class="house-team" id="team-section">
    <div class="house-section-title">
        <div class="house-title">
            Meet The Mofos
        </div>
    </div>
    <div class="house-section-body">
        <div class="house-content">
            <div class="house-theteam" id="containment-wrapper">
                <div class="house-people">
                    <div class="house-title">
                        Choose Your Character
                    </div>
                    <div class="house-title">
                        Choose Your Character
                    </div>
                    <div class="house-title">
                        Choose Your Character
                    </div>
                    <div class="house-grid">
                        @for($i = 0; $i < 9; $i++)
                            <div class="house-personbox grid-item">
                                <div class="house-person" data-id="{{$i}}">
                                    <img class="house-img" src="assets/pac-man.png" alt="">
                                    <img class="house-hover-img" src="assets/pac-man.gif" alt="">
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
                <div class="house-drop">
                    <div class="house-dropbox">
                        Drop your character here !
                    </div>
                </div>
            </div>
            @for($i = 0; $i < 9; $i++)
                <div class="house-test" data-id="{{$i}}">
                    Hello {{$i}}
                </div>
            @endfor
        </div>
    </div>
</div>

