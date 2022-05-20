@extends('layouts.app', ['activePage' => 'login', 'title' => __('Portal ReyFals')])

<video autoplay muted loop id="myVideo">
  <source src="video/video.mp4" type="video/mp4">
</video>
<div class="login-wrapper">
  <div class="login-info">
    <img src="img/lab.png" alt="" class="login-info__logo">
  </div>
  <div id="login" class="login-form">
    <div id="login-form-w" class="login-form__wrapper">
      <img class="top-logo" src="img/logo.png" alt="">
      <h3 class="login-form__title">Inicio de Sesión</h3>
      <small class="login-form__description">
        Datos de inicio de sesion
      </small>
      <form action="login" method="POST">
        @csrf
        <div class="login-form__fields">
          <label class="login-form__label" for="">Orden de laboratorio</label>
          <input class="login-form__input" type="email" name="email" placeholder="Orden de laboratorio">
          <label class="login-form__label" for="">pin</label>
          <input type="password" name="password" class="login-form__input" type="password" placeholder="pin">
          </span>
          @if ($errors->has('password'))
          <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
            <strong>{{ $errors->first('password') }}</strong>
          </div>
          @endif
          <select class="login-form__input" name="selecciona usuario">
            <option value="">Paciente</option>
            <option value="">Médico</option>
            <option value="">Empresa</option>
            <option value="">Funcionario</option>
          </select>
        </div>
        <button class="login-form__submit" type="submit">
          Ingresar
        </button>
        <button type="button" class="login-form__modal" data-open="modal1">
          Ayuda
        </button>
    </div>

    <div class="modal" id="modal1" data-animation="slideInOutLeft">
      <div class="modal-dialog">
        <header class="modal-header">
          <p class="titulo">
            Instrucciones para entrar al sistema
          </p>
          <label class="close-modal" aria-label="close modal" data-close>
            Cerrar ✕
          </label>
        </header>
        <section class="modal-content">
          <img class="logo-modal" src="img/logo.png" alt="">
          <p>Ingrese Con su Numero De Orden Lab
            Que se encuentra en documento entregado en
            el laboratorio:
            <img class="imagen-inst" src="img/inst2.png" alt="">
          </p>
          <p>Ingrese Su PIN
            Que se encuentra en documento entregado en
            el laboratorio:
            <img class="imagen-inst" src="img/inst1.png" alt="">
          </p>
        </section>
      </div>
    </div>
    </form>
  </div>
</div>
</div>