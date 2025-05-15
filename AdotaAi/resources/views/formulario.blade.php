@extends('layouts.main')

@section('title', 'Formulario')

@section('css')
    <link rel="stylesheet" href="/css/formulario-style.css">
@endsection

@section('content')
  <!-- Seção de Doação -->
  <section class="col-lg-8 mx-auto">
      <div class="donation-card">
          <h5 class="form-section-title text-center">
              Quem está doando hoje
          </h5>
          <p class="text-muted text-center">
              Nós nunca compartilharemos essas informações com ninguém.
          </p>

          <form>
              <section>
                  <div class="row g-3">
                      <!-- Informações pessoais -->
                      <div class="col-md-6">
                          <label for="nome" class="form-label"
                              >Nome <span class="text-danger">*</span></label
                          >
                          <input
                              type="text"
                              id="nome"
                              class="form-control rounded-input"
                              required
                          />
                      </div>
                      <div class="col-md-6">
                          <label for="sobrenome" class="form-label"
                              >Sobrenome
                              <span class="text-danger">*</span></label
                          >
                          <input
                              type="text"
                              id="sobrenome"
                              class="form-control rounded-input"
                              required
                          />
                      </div>
                      <div class="col-md-12">
                          <label for="email" class="form-label"
                              >Endereço de email
                              <span class="text-danger">*</span></label
                          >
                          <input
                              type="email"
                              id="email"
                              class="form-control rounded-input"
                              required
                          />
                      </div>
                  </div>
              </section>

              <section>
                  <h6 class="mt-4">Endereço de Cobrança</h6>
                  <div class="row g-3">
                      <div class="col-md-12">
                          <label for="pais" class="form-label"
                              >País <span class="text-danger">*</span></label
                          >
                          <select
                              id="pais"
                              class="form-select rounded-input"
                              required
                          >
                              <option selected disabled></option>
                              <option>Brasil</option>
                              <option>Estados Unidos</option>
                              <option>Canadá</option>
                          </select>
                      </div>
                      <div class="col-md-12">
                          <label for="end1" class="form-label"
                              >Endereço Linha 1
                              <span class="text-danger">*</span></label
                          >
                          <input
                              type="text"
                              id="end1"
                              class="form-control rounded-input"
                              required
                          />
                      </div>
                      <div class="col-md-12">
                          <label for="end2" class="form-label"
                              >Endereço Linha 2</label
                          >
                          <input
                              type="text"
                              id="end2"
                              class="form-control rounded-input"
                          />
                      </div>
                      <div class="col-md-6">
                          <label for="cidade" class="form-label"
                              >Cidade
                              <span class="text-danger">*</span></label
                          >
                          <input
                              type="text"
                              id="cidade"
                              class="form-control rounded-input"
                              required
                          />
                      </div>
                      <div class="col-md-6">
                          <label for="estado" class="form-label"
                              >Estado
                              <span class="text-danger">*</span></label
                          >
                          <input
                              type="text"
                              id="estado"
                              class="form-control rounded-input"
                              required
                          />
                      </div>
                      <div class="col-md-12">
                          <label for="cep" class="form-label"
                              >CEP <span class="text-danger">*</span></label
                          >
                          <input
                              type="text"
                              id="cep"
                              class="form-control rounded-input"
                              required
                          />
                      </div>
                  </div>
              </section>

              <section>
                  <h5 class="form-section-title text-center mt-4">
                      Quanto você gostaria de doar hoje?
                  </h5>
                  <p class="text-muted text-center">
                      Toda doação impacta nossa organização e fortalece nossa
                      missão.
                  </p>
                  <div class="row donation-amount g-3">
                      <!-- Botões de valores fixos -->
                      <div class="col-md-4">
                          <button
                              type="button"
                              class="btn btn-outline-dark w-100"
                          >
                              R$ 18
                          </button>
                      </div>
                      <div class="col-md-4">
                          <button
                              type="button"
                              class="btn btn-outline-dark w-100"
                          >
                              R$ 36
                          </button>
                      </div>
                      <div class="col-md-4">
                          <button
                              type="button"
                              class="btn btn-outline-dark w-100"
                          >
                              R$ 72
                          </button>
                      </div>
                      <div class="col-md-4">
                          <button
                              type="button"
                              class="btn btn-outline-dark w-100"
                          >
                              R$ 180
                          </button>
                      </div>
                      <div class="col-md-4">
                          <button
                              type="button"
                              class="btn btn-outline-dark w-100"
                          >
                              R$ 360
                          </button>
                      </div>
                      <div class="col-md-4">
                          <button
                              type="button"
                              class="btn btn-outline-dark w-100"
                          >
                              R$ 500
                          </button>
                      </div>
                      <div class="col-md-4">
                          <button
                              type="button"
                              class="btn btn-outline-dark w-100"
                          >
                              R$ 1.000
                          </button>
                      </div>
                      <div class="col-md-4">
                          <button
                              type="button"
                              class="btn btn-outline-dark w-100"
                          >
                              R$ 1.800
                          </button>
                      </div>
                      <div class="col-md-4">
                          <button
                              type="button"
                              class="btn btn-outline-dark w-100"
                          >
                              R$ 3.600
                          </button>
                      </div>
                  </div>
                  <input
                      style="
                          padding: 1rem;
                          margin-top: 1rem;
                          border-color: #212529;
                      "
                      type="text"
                      class="form-control rounded-input text-center"
                      placeholder="Insira o valor personalizado"
                  />
              </section>

              <section>
                  <h5 class="form-section-title text-center mt-4">
                      Detalhes do Pagamento
                  </h5>
                  <p class="text-muted text-center">
                      Como você gostaria de pagar sua doação?
                  </p>

                  <!-- Cartões -->
                  <div class="form-check payment-method">
                      <div>
                          <input
                              class="form-check-input"
                              type="radio"
                              name="pagamento"
                              id="cartao"
                              checked
                          />
                          <label class="form-check-label" for="cartao">
                              <span class="title">Cartões bancários</span>
                          </label>
                      </div>
                      <div>
                          <span class="payment-icons">
                              <img src="/img/Visa.png" alt="Visa" />
                              <img
                                  src="/img/Mastercard.png"
                                  alt="Mastercard"
                              />
                              <img src="/img/MNP.png" alt="MNP" />
                          </span>
                      </div> 
                  </div>

                  <!-- Inputs personalizados -->
                  <div class="row mt-3">
                      <div class="col-md-12 mb-2">
                          <div class="input-group-icon">
                              <span class="input-icon">💳</span>
                              <input
                                  type="text"
                                  class="form-control custom-input pl-icon"
                                  placeholder="Número do cartão"
                              />
                          </div>
                      </div>
                      <div class="col-md-6 mb-2">
                          <div class="input-group-icon">
                              <span class="input-icon">📅</span>
                              <input
                                  type="text"
                                  class="form-control custom-input pl-icon"
                                  placeholder="MM / AA"
                              />
                          </div>
                      </div>
                      <div class="col-md-6 mb-2">
                          <div class="input-group-icon">
                              <span class="input-icon">🔒</span>
                              <input
                                  type="text"
                                  class="form-control custom-input pl-icon"
                                  placeholder="CVV"
                              />
                          </div>
                      </div>
                  </div>

                  <small class="text-muted d-block mt-1">
                      Os dados são protegidos pelo padrão PCI DSS. Não
                      armazenamos seus dados.
                  </small>

                  <button
                      type="button"
                      class="btn-donate mt-3 mb-4 custom-button"
                      style="margin-right: 5px"
                  >
                      Pagar
                  </button>

                  <!-- Pagamento Online -->
                  <div class="form-check payment-method">
                      <div>
                          <input
                              class="form-check-input"
                              type="radio"
                              name="pagamento"
                              id="online"
                          />
                          <label class="form-check-label" for="online">
                              <span class="title"
                                  >Sistema de pagamento online</span
                              >
                          </label>
                      </div>
                      <div>
                          <span class="payment-icons">
                              <img src="/img/YouMoney.png" alt="YouMoney" />
                              <img
                                  src="/img/PerfectMoney.png"
                                  alt="Perfect Money"
                              />
                          </span>
                      </div>
                  </div>

                  <!-- Cripto -->
                  <div class="form-check payment-method">
                      <div>
                          <input
                              class="form-check-input"
                              type="radio"
                              name="pagamento"
                              id="crypto"
                          />
                          <label class="form-check-label" for="crypto">
                              <span class="title">Criptomoedas</span>
                          </label>
                      </div>
                      <div>
                          <span class="crypto-icons">
                              <img src="/img/btc.png" alt="BTC" />
                              <img src="/img/eth.png" alt="ETH" />
                              <img src="/img/bch.png" alt="BCH" />
                              <img src="/img/dash.png" alt="DASH" />
                              <img src="/img/itc.png" alt="ITC" />
                              <img src="/img/zec.png" alt="ZEC" />
                              <img src="/img/usdt.png" alt="USDT" />
                          </span>
                      </div>
                  </div>
              </section>

              <section class="donation-summary">
                  <h6 class="form-section-title">Resumo de Doações</h6>
                  <div class="d-flex justify-content-between">
                      <span>Valor do Pagamento</span><span>$ 3,600.00</span>
                  </div>
                  <div class="d-flex justify-content-between">
                      <span>Frequência</span><span>Uma vez</span>
                  </div>
                  <hr />
                  <div class="d-flex justify-content-between fw-bold">
                      <span>Doação Total</span><span>$ 3,600.00</span>
                  </div>
              </section>

              <div class="text-center mt-4">
                  <button type="submit" class="btn-donate w-100">
                      Fazer doação
                  </button>
              </div>
          </form>
      </div>
  </section>
@endsection