@props([
    'photoFileHeader',
    'photoCount',
    'carInfo',
    'photoExtension' => "png"
])
<div class="mb-5 flex flex-col items-center" id="imagesContainer">
    <img id="carPhoto" class="h-72 w-auto md:h-auto md:w-6/12 flex justify-center object-center md:object-position-y-71" src="{{ $photoFileHeader . '0' . '.jpg'}}" alt="{{ $carInfo }}">
    <div class="flex my-6 justify-between items-start w-[90vw]">
        <div>
            @isset($heading)
                {{ $heading }}
            @endisset
            @isset($details)
                {{ $details }}
            @endisset
        </div>

        <div>
            <div class="flex justify-end mb-7">
                <x-img-nav-button imgCount="{{ $photoCount }}" position="left" imgHeader="{{ $photoFileHeader }}"></x-img-nav-button>
                <x-img-nav-button imgCount="{{ $photoCount }}" position="right" imgHeader="{{ $photoFileHeader }}"></x-img-nav-button>
            </div>

        </div>
    </div>
</div>

<script>
    let index = 0;

    function previousButton (photoHeader, imgCount){
        let image = document.getElementById('carPhoto');
        if (index > 0){
            image.src = `${photoHeader}${index - 1}.jpg`;
            index--;
        } else if (index === 0){
            image.src = `${photoHeader}${imgCount - 1}.jpg`
            index = imgCount - 1;
        }
    }
    function nextButton (photoHeader, imgCount){
        let image = document.getElementById('carPhoto');
        if (index !== (imgCount - 1)){
            image.src = `${photoHeader}${index + 1}.jpg`;
            index++;
        } else if (index === (imgCount - 1)){
            image.src = `${photoHeader}0.jpg`;
            index = 0;
        }
    }
</script>
