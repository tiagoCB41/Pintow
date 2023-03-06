<?php
require "db_config.php";
require "config/helper.php";
require "config/url.class.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <?php include "components/heads.php"; ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./assets/css/swiper.css">
</head>

<body>
  <?php include "components/navbar_white.php" ?>
  <div class="welcome mx-auto max-w-7xl px-2 pt-4">
    <div class="mx-auto max-w-xl px-10 pt-4 shadow">
      <h1 class="py-4 text-xl font-semibold">Seja Bem Vindo</h1>
      <form action="./admin/controllers/add_leads.php" method="POST">
        <div>
          <label class="text-sm uppercase text-blue-apcef">
            Nome Completo*
          </label>
          <input type="text" name="name" class="mt-1 mb-2 w-full rounded border-2 border-slate-200 p-2 focus:border-slate-600 focus:outline-none" required />
        </div>
        <div>
          <label class="text-sm uppercase text-blue-apcef">
            Endereço*
          </label>
          <input type="text" name="address" class="mt-1 mb-2 w-full rounded border-2 border-slate-200 p-2 focus:border-slate-600 focus:outline-none" required />
        </div>
        <div>
          <label class="text-sm uppercase text-blue-apcef">
            Email*
          </label>
          <input type="text" name="email" class="mt-1 mb-2 w-full rounded border-2 border-slate-200 p-2 focus:border-slate-600 focus:outline-none" required />
        </div>
        <div>
          <label class="text-sm uppercase text-blue-apcef">
            Telefone*
          </label>
          <input type="text" name="phone" class="mt-1 mb-2 w-full rounded border-2 border-slate-200 p-2 focus:border-slate-600 focus:outline-none" required />
        </div>
        <div>
          <label class="text-sm uppercase text-blue-apcef">
            Cidade*
          </label>
          <select name="city" class="mt-1 mb-2 w-full rounded border-2 border-slate-200 p-2 focus:border-slate-600 focus:outline-none" required>
            <option value="X">

            </option>
          </select>
        </div>
        <div>
          <label class="text-sm uppercase text-blue-apcef">
            Profissão*
          </label>
          <select name="profession" class="mt-1 mb-2 w-full rounded border-2 border-slate-200 p-2 focus:border-slate-600 focus:outline-none" required>
            <option value="X">

            </option>
          </select>
        </div>
        <h2 class="font-semibold md:text-left text-center py-2">Aceito receber notificações e ofertas por: </h2>
        <div class="flex justify-between">
          <p>WhatsApp</p>
          <label class="relative inline-flex items-center cursor-pointer">
            <input name="term_wpp" type="checkbox" value="" class="sr-only peer">
            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
          </label>
        </div>
        <div class="flex justify-between mt-1">
          <p>Email</p>
          <label class="relative inline-flex items-center cursor-pointer">
            <input name="term_email" type="checkbox" value="" class="sr-only peer">
            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
          </label>
        </div>
        <input name="btnsave" type="submit" class="my-4 cursor-pointer rounded bg-color1 py-3 px-6 font-medium  text-white duration-300 ease-in-out hover:bg-blue-apcef w-full" value="Finalizar Cadastro" />
      </form>
    </div>
  </div>

  <script src="./assets/js/script.js"></script>
  <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
</body>

</html>