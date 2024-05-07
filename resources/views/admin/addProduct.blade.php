@extends('layouts.adminlayouts')

@section('title', 'Add Product')

@section('content')
<section class="addProduct">
                <div class="addImage">
                    <p>Add Images</p>
                    <div class="addMainImage">
                        <img src="{{asset('image/admin/image.svg') }}" alt="">
                        <p>Browse Image</p>
                    </div>
                    <div class="addSampleImage">
                        <div class="sampleImage">
                            <img src="{{asset('image/admin/image.png') }}"alt="">
                        </div>
                         <p>sample-image.jpg23<br>234KB
                            </p>
                        <img src="{{asset('image/admin/cancel.png') }}" alt="">
                    </div>
                    <div class="addSampleImage">
                        <div class="sampleImage">
                            <img src="{{asset('image/admin/image.svg') }}"alt="">
                        </div>
                        <p>sample-image.jpg23<br>234KB
                        </p>
                        <img src="{{asset('image/admin/cancel.png') }}"alt="">
                    </div>
                    <div class="addSampleImage">
                        <div class="sampleImage">
                            <img src="{{asset('image/admin/image.svg') }}" alt="">
                        </div>
                        <p>sample-image.jpg23<br>234KB
                        </p>
                        <img src="{{asset('image/admin/cancel.png') }}"alt="">
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
                                <img src="{{asset('image/admin/cancel.png') }}" alt="">
                            </div>
                            <div class="tag">
                                <p>Sofa</p>
                                <img src="{{asset('image/admin/cancel.png') }}" alt="">
                            </div>
                             <div class="tag">
                                <p>Kitchen</p>
                                <img src="{{asset('image/admin/cancel.png') }}" alt="">
                            </div>
                            <div class="tag">
                                <p>Table</p>
                                <img src="{{asset('image/admin/cancel.png') }}" alt="">
                            </div>
                             <div class="tag">
                                <p>Bed</p>
                                <img src="{{asset('image/admin/cancel.png') }}" alt="">
                            </div>
                            <div class="tag">
                                <p>Chair</p>
                                <img src="{{asset('image/admin/cancel.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="btn">
                <input type="reset" value="Cancel">
                <input type="submit" value="Publish Product">
            </div>
@endsection