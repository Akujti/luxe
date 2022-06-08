<div>
    <div class="profile-level">
        <p class="text-center"><b>Million Dollar Club Badge:</b><br> {{ $user->profile->badge['title'] }}</p>
        <div class="d-flex justify-content-center">
            <div class="w-50 d-flex justify-content-between">
                @if ($user->profile)
                    @for ($i = 0; $i < $user->profile->badge['level']; $i++)
                        <span class="filled"></span>
                    @endfor
                    @for ($i = 0; $i < 5 - $user->profile->badge['level']; $i++)
                        <span></span>
                    @endfor
                @endif
            </div>
        </div>
        <div class="level-title mt-2">
            <p id="bold">Level {{ $user->profile->badge['level'] }}</p>
            <p id="regular">&nbsp;/ 5</p>
        </div>
    </div>
    <div class="profile-level">
        <p class="text-center"><b>{{ date('Y') }} Top Producer Badge:</b><br>
            {{ $user->profile->badge['yearly_title'] }}
        </p>
        <div class="d-flex justify-content-center">
            <div class="w-50 d-flex justify-content-between">
                @if ($user->profile)
                    @for ($i = 0; $i < $user->profile->badge['yearly_level']; $i++)
                        <span class="filled"></span>
                    @endfor
                    @for ($i = 0; $i < 3 - $user->profile->badge['yearly_level']; $i++)
                        <span></span>
                    @endfor
                @endif
            </div>
        </div>
        <div class="level-title mt-2">
            <p id="bold">Level {{ $user->profile->badge['yearly_level'] }}</p>
            <p id="regular">&nbsp;/ 3</p>
        </div>
    </div>
</div>
