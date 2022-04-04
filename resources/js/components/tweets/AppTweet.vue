<template>
    <div class="w-full inline-block p-4 border-b border-gray-800 cursor-pointer hover:bg-gray-800">
        <div class="flex w-full">
            <div class="mr-3">
              avatar
            </div>
            <div>
                aaa
            </div>
        </div>
    </div>
</template>
 <script>
export default{
    props :{
        tweet:{
            required:true,
            type: Object
        }
    }
}
 </script>
