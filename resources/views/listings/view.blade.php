<x-layout>
    <x-card class="p-10" style="background-color: #efefef">
        <div class="row">
            <div class="col-md-2">
                <h2 class="text-center font-bold my-6 uppercase mb-10"><i class="fa fa-dashboard"></i>&nbsp&nbspAdmin dashboard</h2>
                <hr>
                <div class="text-center font-bold my-6 uppercase mb-10" style="border: 1px solid black"><a href="/listings/view"><i class="fa-sharp fa-solid fa-eye"></i>&nbsp&nbspView all  posted jobs</a></div>
                <div class="text-center font-bold my-6 uppercase mb-10" style="border: 1px solid black"><a href="/listings/manage"><i class="fa-solid fa-list-check"></i>&nbsp&nbspManage posted jobs</a></div>
                <div class="text-center font-bold my-6 uppercase mb-10" style="border: 1px solid black"><a href="/listings/create"><i class="fa-solid fa-plus"></i>&nbsp&nbspAdd new job</a></div>
                <div class="text-center font-bold my-6 uppercase mt-10" style="border: 1px solid black">
                    <form class="inline" method="POST" action="/logout">
                        @csrf
                        <button type="submit"><i class="fa-solid fa-door-closed"></i>&nbsp&nbspLogout</button>
                    </form>
                </div>
                    </ul>
                </nav>
            </div>
            
            <div class="col-md-10" style="background-color: #777676">
                <h1 class="text-3xl text-center font-bold my-6 uppercase">
                    View All Posted Jobs
                </h1>
                <table class="w-full table-auto rounded-sm">
                    <tbody>
                        @unless($listings->isEmpty())
                        @foreach($listings as $listing)
                        <tr class="border-gray-300">
                            <td
                                class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                            >
                                <a href="show.html">
                                    {{$listing->title}}
                                </a>
                            </td>
                            <td
                                class="px-4 py-8 border-t border-b border-gray-300 text-lg" 
                            >
                                <a
                                    href="/listings/{{$listing->id}}"
                                    class="text-green-400 px-6 py-2 rounded-xl"
                                    ><i class="fa-solid fa-eye"></i>
                                    View Details</a
                                >
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr class="border-gray-300">
                            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                <p class="text-center">No Listings Found</p>
                            </td>
                        </tr>
                        @endunless
        
        
                    </tbody>
                    </table>
            </div>
        </div>


    </x-card>
</x-layout>