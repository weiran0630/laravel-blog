@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Lorem ipsum dolor sit amet consectetur adipisicing.
                </h1>

                <a
                    href="/blog"
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Read More
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://source.unsplash.com/featured/?laptop/1600x900" width="700" alt="">
        </div>

        <div class="m-auto text-left w-4/5 block">
            <h2 class="text-4xl font-extrabold text-gray-600">
                Lorem ipsum dolor sit amet.
            </h2>

            <p class="py-8 text-gray-500 text-l">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum, debitis.
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero suscipit delectus illum magni corporis temporibus et laborum aspernatur doloremque nesciunt?
            </p>

            <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-s py-3 px-8 rounded-3xl">
                find out more
            </a>
        </div>
    </div>

    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-3xl pb-5 text-l">
            Lorem ipsum dolor sit amet.
        </h2>

        <span class="font-extrabold block text-4xl py-1">
            Front-end Decelopment
        </span>
        <span class="font-extrabold block text-4xl py-1">
            UX Design
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Data Structure & Algorithm
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Machine Learning
        </span>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>

        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>

        <p class="m-auto text-gray-500 w-4/5">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto a dolore, mollitia enim iste officia ab! Soluta optio illum eligendi alias quos exercitationem, fugiat accusamus quo pariatur, suscipit qui ipsum?
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 block sm:m-auto w-4/5">
                <span class="uppercase text-l">
                    PHP
                </span>

                <h3 class="text-xl font-bold py-10">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero labore voluptates velit nostrum corrupti reprehenderit eos optio, asperiores expedita quia!
                </h3>
                <a href="" class="uppercase bg-transpraent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find out more
                </a>
            </div>
        </div>
        <div>
            <img class="object-cover h-auto" src="https://source.unsplash.com/featured/?php/1600x900" alt="">
        </div>
    </div>
@endsection
