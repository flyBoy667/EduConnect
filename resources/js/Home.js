import React, { useEffect } from 'react';
import $ from 'jquery';
import { useRef } from 'react';
import { useState } from'react';
import { useNavigate } from 'react-router-dom';
import logo1 from './logo-off.png';
import studentlog from './student.png'
import proflog from './prof.png'
import adminlog from './admin.png'
import '../styles/Home.css';

const Home = () => {
  const bFormRef = useRef(null);
  const boxFormRef = useRef(null);
  const boxInfoRef = useRef(null);

  useEffect(() => {
      $("#do_login").click(function() {
          closeLoginInfo();
          $(this).parent().find('span').css("display", "none");
          $(this).parent().find('span').removeClass("i-save");
          $(this).parent().find('span').removeClass("i-warning");
          $(this).parent().find('span').removeClass("i-close");

          let proceed = true;
          $("#login_form input").each(function() {
              if (!$.trim($(this).val())) {
                  $(this).parent().find('span').addClass("i-warning");
                  $(this).parent().find('span').css("display", "block");  
                  proceed = false;
              }
          });

          if (proceed) {
              $(this).parent().find('span').addClass("i-save");
              $(this).parent().find('span').css("display", "block");
          }
      });

      $("#login_form input").keyup(function() {
          $(this).parent().find('span').css("display", "none");
      });

      openLoginInfo();
      setTimeout(closeLoginInfo, 1000);

      $(window).on('resize', function() {
          closeLoginInfo();
      });
  }, []);

  const openLoginInfo = () => {
      if (bFormRef.current && boxFormRef.current && boxInfoRef.current) {
          $(bFormRef.current).css("opacity", "0.01");
          $(boxFormRef.current).css("left", "-37%");
          $(boxInfoRef.current).css("right", "-37%");
      }
  };

  const closeLoginInfo = () => {
      if (bFormRef.current && boxFormRef.current && boxInfoRef.current) {
          $(bFormRef.current).css("opacity", "1");
          $(boxFormRef.current).css("left", "0px");
          $(boxInfoRef.current).css("right", "-5px");
      }
  };

  return (
    <div className='home'>
        <div>
          <div class="wave"></div>
          <div class="wave"></div>
          <div class="wave"></div>
        </div>
      {/* <div className='welcome'>
        <h1 className='wel'>Bienvenue sur </h1>
      </div> */}
      <div className='img-container'>
        <img src={logo1} alt="Logo du site" className="logo-front"/>
      </div>
      <div className='box'>
          <div className='box-form' ref={boxFormRef}>
              <div className='box-login-tab'></div>
              <div className='box-login-title'>
                  <div className='i i-login'></div>
                  <h2>LOGIN</h2>
              </div>
              <div className='box-login'>
                  <div className='fieldset-body' id='login_form'>
                      <button onClick={openLoginInfo} className='b b-form i i-more' title='Mais Informações'></button>
                      <p className='field'>
                          <label htmlFor='user'>IDENTIFIANT</label>
                          <input type='text' id='user' name='user' title='Username' />
                          <span id='valida' className='i i-warning'></span>
                      </p>
                      <p className='field'>
                          <label htmlFor='pass'>MOT DE PASSE</label>
                          <input type='password' id='pass' name='pass' title='Password' />
                          <span id='valida' className='i i-close'></span>
                      </p>

                      <input type='submit' id='do_login' value='SE CONNECTER' title='Get Started' />
                  </div>
              </div>
          </div>
          <div className='box-info' ref={boxInfoRef}>
              <p><button onClick={closeLoginInfo} className='b b-info i i-left' title='Back to Sign In'></button>
              <h3>Need Help?</h3></p>
              <div className='line-wh'></div>
              <button className='b-support' title='Forgot Password?'> Forgot Password?</button>
              <button className='b-support' title='Contact Support'> Contact Support</button>
              <div className='line-wh'></div>
              <button className='b-cta' title='Sign up now!'> CREATE ACCOUNT</button>
          </div>
      </div>
    </div>
  );
};

export default Home;