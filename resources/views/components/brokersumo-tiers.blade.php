<style>
    .profile-level {
        margin-top: 20px;
    }

    .profile-level span {
        background-color: #DEDEDE;
        width: 20px;
        height: 6px;
        border-radius: 4px;
    }

    .profile-level span.filled {
        background-color: #262626;
    }

    .profile-level .level-title {
        text-align: center;
        font-family: 'gothicbold';
        font-size: 18px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .profile-level .level-title #regular {
        color: #DEDEDE;
    }
</style>
<div>
    <div class="{{ $row ? 'row' : '' }}">
        <div class="profile-level {{ $row ? 'col-md-6' : '' }}">
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
        <div class="profile-level {{ $row ? 'col-md-6' : '' }}">
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
</div>
