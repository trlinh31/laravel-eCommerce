<form action={{ route('shop.search') }}>
    <div class="h-[40px] border-b w-[300px] flex">
        <input type="text" placeholder="Enter keyword" name="keyword" autocomplete="off"
            class="w-full h-full border-none outline-none bg-transparent text-white">
        <button type="submit" class="text-white ml-4 hover:text-blue-600">Search</button>
    </div>
</form>
