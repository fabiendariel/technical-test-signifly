@extends('layout')

@section('content')
{{-- Form --}}
<div class="flex items-center justify-center p-12">
    
    <div class="mx-auto w-full max-w-[850px] bg-white">
        <form x-data="{
            form: $form('post', '/submit-form', {
                front_skills: '{{ old('front_skills') }}',
                back_skills: '{{ old('back_skills') }}',
                expertise: '{{ old('expertise') }}',
                startDate: '{{ old('startDate') }}',
                duration: '{{ old('duration') }}',
                }),
                submit() {
                    this.form.submit()
                        .then(response => {
                            document.getElementById('myTeam').innerHTML = response.data 
                        })
                        .catch((error,response) => {
                            alert(response.message);
                        })
                     
                },
            }"
        @submit.prevent="submit">
        @csrf
        <div class="-mx-3 flex flex-wrap">
            <div class="w-full px-3 sm:w-1/2">
                <div class="mb-5">
                    <label for="front" class="mb-3 block text-base font-medium text-[#07074D]">
                        Frontend technology
                    </label>
                    <select required name="front_skills" id="front_skills" placeholder="Frontend technology"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" 
                        x-model="form.front_skills"
                        @change="form.validate('front_skills')">
                        <option>Choose a Frontend technology</option>
                        @foreach($frontend_skills as $fs)
                        <option value="{{ $fs->id }}">{{ $fs->name }}</option>                        
                        @endforeach
                    </select>  
                    <template x-if="form.invalid('front_skills')">
                        <div x-text="form.errors.front_skills"></div>
                    </template>  
                </div>
            </div>
            <div class="w-full px-3 sm:w-1/2">
                <div class="mb-5">
                    <label for="back" class="mb-3 block text-base font-medium text-[#07074D]">
                        Backend technology
                    </label>
                    <select required name="back_skills" id="back_skills" placeholder="Backend technology"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" 
                        x-model="form.back_skills"
                        @change="form.validate('back_skills')" >
                        <option>Choose a Backend technology</option>
                        @foreach($backend_skills as $bs)
                        <option value="{{ $bs->id }}">{{ $bs->name }}</option>                          
                        @endforeach
                    </select>
                    <template x-if="form.invalid('back_skills')">
                        <div x-text="form.errors.back_skills"></div>
                    </template>     
                </div>
            </div>  
        </div>
            <div class="mb-5">
                <label for="expertise" class="mb-3 block text-base font-medium text-[#07074D]">
                    Expertise level
                </label>
                <select required name="expertise" id="expertise" placeholder="Expertise level"
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" 
                        x-model="form.expertise"
                        @change="form.validate('expertise')" >
                    <option>Choose an expertise level</option>
                    <option value="junior">Junior</option>
                    <option value="intermediate">Intermediate</option>
                    <option value="senior">Senior</option>
                </select>  
                <template x-if="form.invalid('expertise')">
                    <div x-text="form.errors.expertise"></div>
                </template>  
            </div>
        <div class="-mx-3 flex flex-wrap">
            <div class="w-full px-3 sm:w-1/2">            
                <div class="mb-5">
                    <label for="date" class="mb-3 block text-base font-medium text-[#07074D]">
                        Starting date for the project
                    </label>
                    <input required type="date" name="startDate" id="startDate"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" 
                        x-model="form.startDate"
                        @change="form.validate('startDate')" />
                    <template x-if="form.invalid('startDate')">
                        <div x-text="form.errors.startDate"></div>
                    </template>  
                </div>
            </div>
            <div class="w-full px-3 sm:w-1/2">
                <div class="mb-5">
                    <label for="date" class="mb-3 block text-base font-medium text-[#07074D]">
                        Duration (in days)
                    </label>
                    <input required type="text" name="duration" id="duration"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" 
                        x-model="form.duration"
                        @change="form.validate('duration')"  />
                    <template x-if="form.invalid('duration')">
                        <div x-text="form.errors.duration"></div>
                    </template>  
                </div>
            </div>
        </div>    

            <div>
                <button :disabled="form.processing"
                    class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                    Find a team
                </button>
            </div>
        </form>
        
    </div>
</div>
{{-- Team Presentation --}}
<div x-data="{team: ''}">
    <div id="myTeam" x-ref="team" x-html="team" class="bg-gray-100">
        {{-- <div class="py-10 max-w-screen-lg mx-auto">
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
                        <img class="w-100" src="{{ $team_leader->profile_img }}" />
                        <div class="p-4">
                            <div class="text-md">
                                <a href="#"
                                    class="hover:text-indigo-500 text-gray-900 font-semibold transition duration-500 ease-in-out">{{ $team_leader->name }}</a>
                                <p class="text-gray-500 uppercase text-sm">{{ $team_leader->role }}</p>    
                            </div>
                            <div class="my-4 flex justify-center items-center">
                                <p class="text-gray-900 font-semibold transition duration-500 ease-in-out">
                                <u>Expertise</u> : {{ $team_leader->experience }} years
                                </p>
                            </div>
                            <div class="my-4 flex justify-center items-center">
                                <p class="text-gray-500 font-semibold transition duration-500 ease-in-out">
                                <u>Knowledge</u> :<br/> {{ $team_leader->knowledge }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endif
                @if ($team_back)
                    <div class="text-center bg-white">
                        <img class="w-100" src="{{ $team_back->profile_img }}" />
                        <div class="p-4">
                            <div class="text-md">
                                <a href="#"
                                    class="hover:text-indigo-500 text-gray-900 font-semibold transition duration-500 ease-in-out">{{ $team_back->name }}</a>
                                <p class="text-gray-500 uppercase text-sm">{{ $team_back->role }}</p>    
                            </div>
                            <div class="my-4 flex justify-center items-center">
                                <p class="text-gray-900 font-semibold transition duration-500 ease-in-out">
                                <u>Expertise</u> : {{ $team_back->experience }} years
                                </p>
                            </div>
                            <div class="my-4 flex justify-center items-center">
                                <p class="text-gray-500 font-semibold transition duration-500 ease-in-out">
                                <u>Knowledge</u> :<br/> {{ $team_back->knowledge }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endif
                @if ($team_front)
                    <div class="text-center bg-white">
                        <img class="w-100" src="{{ $team_front->profile_img }}" />
                        <div class="p-4">
                            <div class="text-md">
                                <a href="#"
                                    class="hover:text-indigo-500 text-gray-900 font-semibold transition duration-500 ease-in-out">{{ $team_front->name }}</a>
                                <p class="text-gray-500 uppercase text-sm">{{ $team_front->role }}</p>    
                            </div>
                            <div class="my-4 flex justify-center items-center">
                                <p class="text-gray-900 font-semibold transition duration-500 ease-in-out">
                                <u>Expertise</u> : {{ $team_front->experience }} years
                                </p>
                            </div>
                            <div class="my-4 flex justify-center items-center">
                                <p class="text-gray-500 font-semibold transition duration-500 ease-in-out">
                                <u>Knowledge</u> :<br/> {{ $team_front->knowledge }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endif
                @if ($team_support)
                    <div class="text-center bg-white">
                        <img class="w-100" src="{{ $team_support->profile_img }}" />
                        <div class="p-4">
                            <div class="text-md">
                                <a href="#"
                                    class="hover:text-indigo-500 text-gray-900 font-semibold transition duration-500 ease-in-out">{{ $team_support->name }}</a>
                                <p class="text-gray-500 uppercase text-sm">{{ $team_leader->role }}</p>    
                            </div>
                            <div class="my-4 flex justify-center items-center">
                                <p class="text-gray-900 font-semibold transition duration-500 ease-in-out">
                                <u>Expertise</u> : {{ $team_support->experience }} years
                                </p>
                            </div>
                            <div class="my-4 flex justify-center items-center">
                                <p class="text-gray-500 font-semibold transition duration-500 ease-in-out">
                                <u>Knowledge</u> :<br/> {{ $team_support->knowledge }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endif

            </div>

        </div> --}}
    </div>
</div>

<script>
(function () {
  "use strict";

  window.createFormComponent = function () {
    return {
      team: "",

      onSubmit($event) {
        this.team = team;
      }
    };
  };
})();
</script>
@endsection