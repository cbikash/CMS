<div class="col-md-12 top-search">
<div class="row">
  <div class="col-md-8">
    <form class="form-inline" id="search-form">
    <input class="form-control serach-form col-md-8 col-sm-8" type="search" id="search-data" placeholder="Search" aria-label="Search">
    <input type="submit" class="btn btn-ser btn-outline-success btns btn-search col-md-4" id="btn-search" Value="Search" >
    </form>
  </div>
  <div class="col-md-4">
  <div class="sort">
  <div class="form">
    <form action="">
      <div class="form-group">
        <label class="sr-only" for="sort-by">Sort By</label>
        <select class="form-control sort-by" id="sort-by" name="sort-by">
          <option value="">Sort By</option>
          <option value="AscPrice" @if (isset($_GET['sort']) && $_GET['sort'] == "AscPrice") selected @endif>Price (Low to High)</option>
          <option value="DescPrice" @if (isset($_GET['sort']) && $_GET['sort'] == "DescPrice") selected @endif>Price (High to Low)</option>
          <option value="AscName" @if (isset($_GET['sort']) && $_GET['sort'] == "AscName") selected @endif>Name (A to Z)</option>
          <option value="descName" @if (isset($_GET['sort']) && $_GET['sort'] == "descName") selected @endif>Name (Z to A)</option>
        </select>
      </div>
    </form>

  </div>
</div>
</div>
</div>
<hr>
</div>
