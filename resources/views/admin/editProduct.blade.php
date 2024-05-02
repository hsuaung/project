@extends('layouts.adminlayouts')

@section('title', 'Edit Product')

@section('content')
<section class="addProduct">
                <div class="addImage">
                    <p>Add Images</p>
                    <div class="addMainImage">
                        <img src="/image/image.svg" alt="">
                        <p>Browse Image</p>
                    </div>
                    <div class="addSampleImage">
                        <div class="sampleImage">
                            <img src="/image/image.svg" alt="">
                        </div>
                        <p>sample-image.jpg23<br>234KB
                        </p>
                        <img src="/image/cancel.png" alt="">
                    </div>
                    <div class="addSampleImage">
                        <div class="sampleImage">
                            <img src="/image/image.svg" alt="">
                        </div>
                        <p>sample-image.jpg23<br>234KB
                        </p>
                        <img src="/image/cancel.png" alt="">
                    </div>
                    <div class="addSampleImage">
                        <div class="sampleImage">
                            <img src="/image/image.svg" alt="">
                        </div>
                        <p>sample-image.jpg23<br>234KB
                        </p>
                        <img src="/image/cancel.png" alt="">
                    </div>
                </div>
                <div class="addContent">
                    <label for="productName">Product Name <span>*</span></label>
                    <input type="text" id="productName">
                    <label for="category">Category <span>*</span></label>
                    <select id="category">
                        <option value=""></option>
                        <option value=" 01">category</option>
                        <option value="02">category</option>
                        <option value="03">category</option>

                    </select>
                    <label for="price">Price <span>*</span></label>
                    <input type="text" id="price">
                    <label for="description">Description <span>*</span></label>
                    <textarea name="" id="description" cols="30" rows="10"></textarea>
                    <div class="">
                        <p>Tags</p> <br>
                        <div class="tagContainer">
                            <div class="tag">
                                <p>Cabinet</p>
                                <img src="/image/cancel.png" alt="">
                            </div>
                            <div class="tag">
                                <p>Sofa</p>
                                <img src="/image/cancel.png" alt="">
                            </div>
                            <div class="tag">
                                <p>Kitchen</p>
                                <img src="/image/cancel.png" alt="">
                            </div>
                            <div class="tag">
                                <p>Table</p>
                                <img src="/image/cancel.png" alt="">
                            </div>
                            <div class="tag">
                                <p>Bed</p>
                                <img src="/image/cancel.png" alt="">
                            </div>
                            <div class="tag">
                                <p>Chair</p>
                                <img src="/image/cancel.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="btn">
                <input type="reset" value="Cancel">
                <input type="submit" value="Update Product">
            </div>
@endsection