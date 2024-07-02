{{-- Team Presentation --}}

    <div class="py-10 max-w-screen-lg mx-auto">
        <div class="text-center mb-16">
            <p class="mt-4 text-sm leading-7 text-gray-500 font-regular">
                THE TEAM
            </p>
            <h3 class="text-3xl sm:text-4xl leading-normal font-extrabold tracking-tight text-gray-900">
                Meet your <span class="text-indigo-600">perfect Team</span>
            </h3>
        </div>


        <div class="grid grid-cols-4 gap-4 col-gap-10">
            @if ($team_leader)
                <div class="text-center bg-white">
                    <h3 class="text-lg text-gray-800 font-regular">Team Leader</h3>
                    <img class="w-100" src="{{ $team_leader->profile_img }}" />
                    <div class="p-4">
                        <div class="text-md">
                            <a href="#"
                                class="hover:text-indigo-500 text-gray-900 font-semibold transition duration-500 ease-in-out">{{ $team_leader->name }}</a>
                            <p class="text-gray-500 uppercase text-sm"></p> 
                            <p class="text-blue-500 uppercase text-sm">{{ $team_leader->phone }}</p>    
                            <p class="text-red-500 text-sm">{{ $team_leader->email }}</p>     
                        </div>
                        <div class="my-4 flex justify-center items-center">
                            <p class="text-gray-900 font-semibold transition duration-500 ease-in-out">
                            <u>Work experience</u> : {{ $team_leader->experience }} years
                            </p>
                        </div>
                        <div class="my-4 flex justify-center items-center">
                            <p class="text-gray-500 font-semibold transition duration-500 ease-in-out">
                            <u>Knowledge</u> :<br/> {{ $team_leader->knowledge }}
                            </p>
                        </div>
                        <div class="my-4 flex justify-center items-center">
                            <p class="text-gray-900 font-semibold transition duration-500 ease-in-out">
                            <u>Skills</u> :<br/>                          
                            @foreach($team_leader->skills as $skill)
                               - {{ $skill->name }}<br/>
                            @endforeach
                            </p>
                        </div>
                    </div>
                </div>
            @endif
            @if ($team_back)
                <div class="text-center bg-white">
                    <h3 class="text-lg leading-7 text-gray-800 font-regular">Backend</h3>
                    <img class="w-100" src="{{ $team_back->profile_img }}" />
                    <div class="p-4">
                        <div class="text-md">
                            <a href="#"
                                class="hover:text-indigo-500 text-gray-900 font-semibold transition duration-500 ease-in-out">{{ $team_back->name }}</a>
                            <p class="text-gray-500 uppercase text-sm">{{ $team_back->role }}</p> 
                            <p class="text-blue-500 uppercase text-sm">{{ $team_back->phone }}</p>    
                            <p class="text-red-500 text-sm">{{ $team_back->email }}</p>     
                        </div>
                        <div class="my-4 flex justify-center items-center">
                            <p class="text-gray-900 font-semibold transition duration-500 ease-in-out">
                            <u>Work experience</u> : {{ $team_back->experience }} years
                            </p>
                        </div>
                        <div class="my-4 flex justify-center items-center">
                            <p class="text-gray-500 font-semibold transition duration-500 ease-in-out">
                            <u>Knowledge</u> :<br/> {{ $team_back->knowledge }}
                            </p>
                        </div>
                        <div class="my-4 flex justify-center items-center">
                            <p class="text-gray-900 font-semibold transition duration-500 ease-in-out">
                            <u>Skills</u> :<br/>                          
                            @foreach($team_back->skills as $skill)
                               - {{ $skill->name }}<br/>
                            @endforeach
                            </p>
                        </div>
                    </div>
                </div>
            @endif
            @if ($team_front)
                <div class="text-center bg-white">
                    <h3 class="text-lg leading-7 text-gray-800 font-regular">Frontend</h3>
                    <img class="w-100" src="{{ $team_front->profile_img }}" />
                    <div class="p-4">
                        <div class="text-md">
                            <a href="#"
                                class="hover:text-indigo-500 text-gray-900 font-semibold transition duration-500 ease-in-out">{{ $team_front->name }}</a>
                            <p class="text-gray-500 uppercase text-sm">{{ $team_front->role }}</p> 
                            <p class="text-blue-500 uppercase text-sm">{{ $team_front->phone }}</p>    
                            <p class="text-red-500 text-sm">{{ $team_front->email }}</p>     
                        </div>
                        <div class="my-4 flex justify-center items-center">
                            <p class="text-gray-900 font-semibold transition duration-500 ease-in-out">
                            <u>Work experience</u> : {{ $team_front->experience }} years
                            </p>
                        </div>
                        <div class="my-4 flex justify-center items-center">
                            <p class="text-gray-500 font-semibold transition duration-500 ease-in-out">
                            <u>Knowledge</u> :<br/> {{ $team_front->knowledge }}
                            </p>
                        </div>
                        <div class="my-4 flex justify-center items-center">
                            <p class="text-gray-900 font-semibold transition duration-500 ease-in-out">
                            <u>Skills</u> :<br/>                          
                            @foreach($team_front->skills as $skill)
                               - {{ $skill->name }}<br/>
                            @endforeach
                            </p>
                        </div>
                    </div>
                </div>
            @endif
            @if ($team_support)
                <div class="text-center bg-white">
                    <h3 class="text-lg leading-7 text-gray-800 font-regular">Team Support</h3>
                    <img class="w-100" src="{{ $team_support->profile_img }}" />
                    <div class="p-4">
                        <div class="text-md">
                            <a href="#"
                                class="hover:text-indigo-500 text-gray-900 font-semibold transition duration-500 ease-in-out">{{ $team_support->name }}</a>
                            <p class="text-gray-500 uppercase text-sm">{{ $team_support->role }}</p>   
                            <p class="text-blue-500 uppercase text-sm">{{ $team_support->phone }}</p>    
                            <p class="text-red-500 text-sm">{{ $team_support->email }}</p>   
                        </div>
                        <div class="my-4 flex justify-center items-center">
                            <p class="text-gray-900 font-semibold transition duration-500 ease-in-out">
                            <u>Work experience</u> : {{ $team_support->experience }} years
                            </p>
                        </div>
                        <div class="my-4 flex justify-center items-center">
                            <p class="text-gray-500 font-semibold transition duration-500 ease-in-out">
                            <u>Knowledge</u> :<br/> {{ $team_support->knowledge }}
                            </p>
                        </div>
                        <div class="my-4 flex justify-center items-center">
                            <p class="text-gray-900 font-semibold transition duration-500 ease-in-out">
                            <u>Skills</u> :<br/>                          
                            @foreach($team_support->skills as $skill)
                               - {{ $skill->name }}<br/>
                            @endforeach
                            </p>
                        </div>
                    </div>
                </div>
            @endif

        </div>

    </div>
