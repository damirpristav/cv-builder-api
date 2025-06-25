<html lang="en">

<head>
    <title>CV Template</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:wght@100..900&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body,
        html {
            height: 100%;
        }

        .primary-font {
            font-family: "Roboto", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
            font-variation-settings:
                "wdth" 100;
        }

        .secondary-font {
            font-family: "Roboto Condensed", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
        }
    </style>
</head>

<body>
    <div class="flex max-w-5xl mx-auto primary-font relative">
        <div class="print:fixed print:top-0 print:left-0 print:bottom-0 print:w-[33.33%] print:h-full bg-sky-900 print:block hidden"></div>
        <div class="w-1/3 bg-sky-900 text-white pl-10 pb-10 flex flex-col gap-8 z-10">
            <div class="py-10 flex justify-center">
                <div class="w-[150px] h-[150px] -ml-5 relative overflow-hidden">
                    @if (isset($fields['image']))
                    <img src="{{$fields['image']}}" alt="" class="block max-w-full max-h-full" />
                    @endif
                </div>
            </div>
            <div>
                <h2 class="text-3xl font-medium mb-3 border-b border-white secondary-font pb-1 font-black">Contact</h2>
                <ul class="font-light pr-2">
                    <li>
                        <p class="secondary-font font-bold">Phone</p>
                        <p class="text-sm">{{$fields['phone']}}</p>
                    </li>
                    <li class="pt-2">
                        <p class="secondary-font font-bold">Email</p>
                        <p class="text-sm">{{$fields['email']}}</p>
                    </li>
                    <li class="pt-2">
                        <p class="secondary-font font-bold">Address</p>
                        <p class="text-sm">{{$fields['address']}}</p>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="text-3xl font-medium mb-3 border-b border-white secondary-font pb-1 font-black">Expertise
                </h2>
                <ul class="pr-2">
                    @foreach ($fields['expertise'] as $skill)
                      <li @class(['pt-2' => $loop->index > 0])>{{$skill}}</li>
                    @endforeach
                </ul>
            </div>
            <div>
                <h2 class="text-3xl font-medium mb-3 border-b border-white secondary-font pb-1">Languages</h2>
                <ul class="pr-2">
                    @foreach ($fields['languages'] as $lang)
                      <li @class(['pt-2' => $loop->index > 0])>{{$lang['name']}}: <span class="uppercase">{{$lang['level']}}</span></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="w-2/3 px-8 pb-10 text-sky-900 flex flex-col gap-8">
            <div class="my-10 min-h-[150px] flex flex-col justify-center">
                <h1 class="text-4xl font-semibold mb-1 secondary-font">{{$fields['fullName']}}</h1>
                <p class="text-2xl font-semibold">{{$fields['position']}}</p>
            </div>
            <div>
                <h2 class="text-3xl font-medium mb-3 border-b border-sky-900 secondary-font pb-1 font-bold">Experience
                </h2>

                <ul class="flex flex-col">
                    @foreach ($fields['experiences'] as $exp)
                        <li @class(['grid grid-cols-3 gap-4 break-inside-avoid', 'pb-4' => $loop->index == 0, 'py-4' => $loop->index > 0])>
                            <div class="font-light">
                                @php $to = isset($exp['to']); @endphp
                                <p>{{$exp['from']}} &minus; @if ($to) {{$exp['to']}} @else Present @endif</p>
                                <p>{{$exp['companyName']}}</p>
                            </div>
                            <div class="col-span-2">
                                <p>{{$exp['position']}}</p>
                                <p class="text-sm font-light">
                                    {{$exp['description']}}
                                </p>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="break-inside-avoid">
                <h2 class="text-3xl font-medium mb-3 border-b border-sky-900 secondary-font pb-1 font-bold">Education
                </h2>
                <ul class="flex flex-col">
                    @foreach ($fields['education'] as $edu)
                        <li @class(['grid grid-cols-3 gap-4 break-inside-avoid py-4', 'pb-4' => $loop->index == 0, 'py-4' => $loop->index > 0])>
                            <div class="font-light">
                                @php $to = isset($edu['to']); @endphp
                                <p>{{$edu['from']}} &minus; @if ($to) {{$edu['to']}} @else Present @endif</p>
                                <p>{{$edu['school']}}</p>
                            </div>
                            <div class="col-span-2">
                                <p>{{$edu['position']}}</p>
                                <p class="text-sm font-light">
                                    {{$edu['description']}}
                                </p>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

</body>

</html>
