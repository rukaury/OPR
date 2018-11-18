<?php
/**
 * search Form view.
 * Creator: Aury
 * Date: 2018-11-10
 * Time: 16:30
 */
?>

<form class="search-filter" action="properties.php" id="searchPropertiesForm" method="get">
    <div class="search-filter_top">
        <div class="row">
            <div class="col-lg-12 col-md-6">
                <div class="form-group">
                    <label>City</label>
                    <select class="js-select2" name="city">
                        <option value="ottawa">Ottawa</option>
                        <option value="gatineau">Gatineau</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-12 col-md-6">
                <div class="form-group">
                    <label>Property Type</label>
                    <select class="js-select2" name="type">
                        <option value="apartment">Apartment</option>
                        <option value="condo">Condo</option>
                        <option value="house">House</option>
                        <option value="studio">Studio</option>
                        <option value="common space">Common space</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-12 col-md-6">
                <div class="form-group">
                    <label>Purpose</label>
                    <select class="js-select2">
                        <option value="any_Purpose">Any Purpose</option>
                        <option value="Purpose_1">Cheap</option>
                        <option value="Purpose_2">All inclusive</option>
                        <option value="Purpose_3">Amenities and Activities</option>
                        <option value="Purpose_4">Business use</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-12 col-md-6">
                <div class="form-group">
                    <label>Bedrooms</label>
                    <select class="js-select2" name="beds">
                        <option value="1">1+</option>
                        <option value="2">2+</option>
                        <option value="3">3+</option>
                        <option value="4">4+</option>
                        <option value="5">5+</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-12 col-md-6">
                <div class="form-group">
                    <label>Bathrooms</label>
                    <select class="js-select2" name="baths">
                        <option value="1">1+</option>
                        <option value="2">2+</option>
                        <option value="3">3+</option>
                    </select>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group mb-0">
                    <label>Price</label>
                    <div class="range-slider_wrap">
                        <div class="range-slider" id="js-range-slider"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="search-filter_bot">
        <input class="btn btn-primary btn-md btn-block""
               type="submit"
               value="search
        properties"
               id="submitBttn">
    </div>
</form>
