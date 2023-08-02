<form action="{{ route('shop.filter') }}" method="get">
    <div class="flex items-center">
        <label for="sort_by" class="text-white mr-4">Sắp xếp theo:</label>
        <select name="sort_by" id="sort_by" class="border-none outline-none py-1">
            <option {{ request('sort_by') == 'name_asc' ? 'selected' : '' }} value="name_asc">Tên sản phẩm (A-Z)
            </option>
            <option {{ request('sort_by') == 'name_desc' ? 'selected' : '' }} value="name_desc">Tên sản phẩm (Z-A)
            </option>
            <option {{ request('sort_by') == 'price_asc' ? 'selected' : '' }} value="price_asc">Giá sản phẩm (thấp đến
                cao)</option>
            <option {{ request('sort_by') == 'price_desc' ? 'selected' : '' }} value="price_desc">Giá sản phẩm (cao đến
                thấp)</option>
        </select>
        <button type="submit" class="text-white ml-4 text-3xl"><i class='bx bx-filter-alt'></i></button>
    </div>
</form>
