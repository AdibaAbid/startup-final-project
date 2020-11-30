<?php

include('components/header.php');

?>
        <p class="text-gray-600 text-sm pt-2">Sign In to your account.</p>
        </section>
    <!-- Registration Form  -->
        <section class="mt-4">
            <form class="flex flex-col" method="POST" >
                <div class="mb-4 pt-2 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-1 ml-3" for="email">Email</label>
                    <input type="text" id="email" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-2">
                </div>
                <div class="mb-4 pt-2 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-1 ml-3" for="password">Password</label>
                    <input type="password" id="password" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-2">
                </div>
                <div class="flex justify-end">
                    <a href="#" class="text-sm text-purple-600 hover:text-purple-700 hover:underline mb-4">Forgot your password?</a>
                </div>
                <button class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-1 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit">Sign In</button>
            </form>
        </section>
    </main>

    <div class="max-w-lg mx-auto text-center mt-4 mb-2">
        <p class="text-white">Do you have an account? <a href="signup.php" class="font-bold hover:underline">Sign Up</a>.</p>
    </div>

<?php include('components/footer.php'); ?>