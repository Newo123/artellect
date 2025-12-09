<section class="ads-calculator art-calculator">
  <div class="ads-calculator__body container">
    <div class="ads-calculator__head">
      <h2 class="ads-calculator__title section-title">Рассчитайте вашу прибыль <br>
        от инвестиций в маркетинг</h2>
    </div>
    <div class="ads-calculator__tabs">
      <div class="ads-calculator__tab border-gradient border-rainbow active " data-calc-tab="1">По нагрузке на
        отдел продаж
      </div>
      <div class="ads-calculator__tab border-gradient border-rainbow" data-calc-tab="2">По желаемому бюджету
      </div>
      <div class="ads-calculator__tab border-gradient border-rainbow" data-calc-tab="3">По желаемой выручке
      </div>
    </div>

    <div class="ads-calculator__block active" data-calc-block="1">
      <div class="ads-calculator__card border-gradient">
        <div class="ads-calculator__subtitle">Вводные данные:</div>
        <div class="ads-calculator__row">
          <div class="ads-calculator__area no-valid">
            <div class="ads-calculator__label gradient-text">Сколько лидов (обращений) сможете обработать?
              <span class="tips">
                <span class="tips__btn">?</span>
                <span class="tips__message">Укажите объем лидов, который вы сможете обработать в течение
                  месяца</span>
              </span>
            </div>
            <div class="border-gradient">
              <input type="number" class="ads-calculator__input" inputmode="numeric"
                placeholder="Укажите кол-во">
            </div>
            <div class="ads-calculator__error-text">Неверное значение</div>
          </div>
        </div>
        <div class="ads-calculator__row">
          <div class="ads-calculator__area">
            <div class="ads-calculator__label gradient-text">Средняя маржинальность:
              <span class="tips">
                <span class="tips__btn">?</span>
                <span class="tips__message">Укажите среднюю рентабельность по вашей валовой прибыли</span>
              </span>
            </div>
            <div class="border-gradient">
              <input type="number" class="ads-calculator__input" inputmode="numeric"
                placeholder="Укажите в процентах">
            </div>
          </div>
          <div class="ads-calculator__area">
            <div class="ads-calculator__label gradient-text">Средний чек:
              <span class="tips">
                <span class="tips__btn">?</span>
                <span class="tips__message">Укажите среднюю сумму, которую вам приносит клиент в
                  месяц</span>
              </span>
            </div>
            <div class="border-gradient">
              <input type="number" class="ads-calculator__input" inputmode="numeric"
                placeholder="Укажите сумму в рублях">
            </div>
          </div>
        </div>
        <div class="ads-calculator__row">
          <div class="ads-calculator__area">
            <div class="ads-calculator__label gradient-text">Коэффициент рентабельности маркетинга (ROMI):
              <span class="tips">
                <span class="tips__btn">?</span>
                <span class="tips__message">Укажите желаемый процент возврата инвестиций от вложений в
                  маркетинг</span>
              </span>
            </div>
            <div class="border-gradient">
              <input type="number" class="ads-calculator__input" inputmode="numeric"
                placeholder="Укажите в процентах">
            </div>
          </div>
        </div>
        <div class="ads-calculator__row">
          <div class="ads-calculator__area">
            <div class="ads-calculator__label gradient-text">Средняя конверсия из обращения в продажу (%):
              <span class="tips">
                <span class="tips__btn">?</span>
                <span class="tips__message">Какой процент обратившихся к вам людей становятся клиентами и
                  заказывают товар/услугу</span>
              </span>
            </div>
            <div class="border-gradient">
              <input type="number" class="ads-calculator__input" inputmode="numeric"
                placeholder="Укажите в процентах">
            </div>
          </div>
        </div>
        <div class="ads-calculator__card-dec"></div>
        <div class="ads-calculator__card-dec"></div>
      </div>
      <div class="ads-calculator__results border-gradient">
        <div class="ads-calculator__subtitle">Результат расчёта:</div>
        <div class="ads-calculator__result">
          <p>Бюджет на маркетинг в месяц: <span>— ₽</span></p>
          <span class="tips">
            <span class="tips__btn">?</span>
            <span class="tips__message">Ориентировочный бюджет на ваш маркетинговый отдел, включая
              ФОТ</span>
          </span>
        </div>
        <div class="ads-calculator__result">
          <p>Допустимая стоимость клиента (CAC): <span>— ₽</span></p>
          <span class="tips">
            <span class="tips__btn">?</span>
            <span class="tips__message">При заданных выше параметрах вы можете привлекать себе клиента не
              дороже указанной суммы</span>
          </span>
        </div>
        <div class="ads-calculator__result">
          <p>Допустимая стоимость лида (CPL): <span>— ₽</span></p>
          <span class="tips">
            <span class="tips__btn">?</span>
            <span class="tips__message">При заданных выше параметрах вы можете привлекать себе заявку
              (обращение) не дороже указанной суммы</span>
          </span>
        </div>
        <div class="ads-calculator__result">
          <p>Необходимое кол-во клиентов/месяц: <span>— ₽</span></p>
          <span class="tips">
            <span class="tips__btn">?</span>
            <span class="tips__message">Минимальное кол-во клиентов для обеспечения заданной выручки</span>
          </span>
        </div>
        <div class="ads-calculator__result">
          <p>Выручка в месяц: <span>— ₽</span></p>
          <span class="tips">
            <span class="tips__btn">?</span>
            <span class="tips__message">Ориентировочная выручка, которая будет сформирована из заданных
              параметров</span>
          </span>
        </div>
        <div class="ads-calculator__result">
          <p>Вaловая прибыль: <span>— ₽</span></p>
          <span class="tips">
            <span class="tips__btn">?</span>
            <span class="tips__message">Ориентировочная валовая прибыль после вычета расходов на
              маркетинг</span>
          </span>
        </div>
        <button type="button" class="button-decore open-popup" data-popup="resultsPopup">Узнайте как получить
          результат!</button>
      </div>
    </div>

    <div class="ads-calculator__block " data-calc-block="2">
      <div class="ads-calculator__card border-gradient">
        <div class="ads-calculator__subtitle">Вводные данные:</div>
        <div class="ads-calculator__row">
          <div class="ads-calculator__area">
            <div class="ads-calculator__label gradient-text">Вложения в маркетинг:
              <span class="tips">
                <span class="tips__btn">?</span>
                <span class="tips__message">Укажите объем бюджета, который вы можете потратить на
                  маркетинг, включая ФОТ</span>
              </span>
            </div>
            <div class="border-gradient">
              <input type="number" class="ads-calculator__input" inputmode="numeric"
                placeholder="Укажите кол-во">
            </div>
          </div>
          <div class="ads-calculator__area">
            <div class="ads-calculator__label gradient-text">Средний чек:
              <span class="tips">
                <span class="tips__btn">?</span>
                <span class="tips__message">Укажите среднюю сумму, которую вам приносит клиент в
                  месяц</span>
              </span>
            </div>
            <div class="border-gradient">
              <input type="number" class="ads-calculator__input" inputmode="numeric"
                placeholder="Укажите в процентах">
            </div>
          </div>
        </div>
        <div class="ads-calculator__row">
          <div class="ads-calculator__area">
            <div class="ads-calculator__label gradient-text">Средняя маржинальность (%):
              <span class="tips">
                <span class="tips__btn">?</span>
                <span class="tips__message">Укажите среднюю рентабельность по вашей валовой прибыли</span>
              </span>
            </div>
            <div class="border-gradient">
              <input type="number" class="ads-calculator__input" inputmode="numeric"
                placeholder="Укажите сумму в рублях">
            </div>
          </div>
        </div>
        <div class="ads-calculator__row">
          <div class="ads-calculator__area">
            <div class="ads-calculator__label gradient-text">Коэффициент рентабельности маркетинга (ROMI):
              <span class="tips">
                <span class="tips__btn">?</span>
                <span class="tips__message">Укажите желаемый процент возврата инвестиций от вложений в
                  маркетинг</span>
              </span>
            </div>
            <div class="border-gradient">
              <input type="number" class="ads-calculator__input" inputmode="numeric"
                placeholder="Укажите в процентах">
            </div>
          </div>
        </div>
        <div class="ads-calculator__row">
          <div class="ads-calculator__area">
            <div class="ads-calculator__label gradient-text">Средняя конверсия из обращения в продажу (%):
              <span class="tips">
                <span class="tips__btn">?</span>
                <span class="tips__message">Какой процент обратившихся к вам людей становятся клиентами и
                  заказывают
                  товар/услугу</span>
              </span>
            </div>
            <div class="border-gradient">
              <input type="number" class="ads-calculator__input" inputmode="numeric"
                placeholder="Укажите в процентах">
            </div>
          </div>
        </div>
        <div class="ads-calculator__card-dec"></div>
        <div class="ads-calculator__card-dec"></div>
      </div>
      <div class="ads-calculator__results border-gradient">
        <div class="ads-calculator__subtitle">Результат расчёта:</div>
        <div class="ads-calculator__result">
          <p>Необходимое кол-во лидов/месяц: <span>—</span></p>
          <span class="tips">
            <span class="tips__btn">?</span>
            <span class="tips__message">Минимальное кол-во заявок для обеспечения оптимиальной загрузки
              бюджета</span>
          </span>
        </div>
        <div class="ads-calculator__result">
          <p>Необходимое кол-во клиентов/месяц: <span>—</span></p>
          <span class="tips">
            <span class="tips__btn">?</span>
            <span class="tips__message">Нужно будет обработать клиентов при заданных параметрах</span>
          </span>
        </div>
        <div class="ads-calculator__result">
          <p>Допустимая стоимость лида (CPL): <span>— ₽</span></p>
          <span class="tips">
            <span class="tips__btn">?</span>
            <span class="tips__message">При заданных выше параметрах вы можете привлекать себе заявку
              (обращение) не дороже указанной суммы</span>
          </span>
        </div>
        <div class="ads-calculator__result">
          <p>Допустимая стоимость клиента (CAC): <span>— ₽</span></p>
          <span class="tips">
            <span class="tips__btn">?</span>
            <span class="tips__message">При заданных выше параметрах вы можете привлекать себе клиента не
              дороже указанной суммы</span>
          </span>
        </div>
        <div class="ads-calculator__result">
          <p>Выручка в месяц: <span>— ₽</span></p>
          <span class="tips">
            <span class="tips__btn">?</span>
            <span class="tips__message">Ориентировочная выручка, которая будет сформирована из заданных
              параметров</span>
          </span>
        </div>
        <div class="ads-calculator__result">
          <p>Вaловая прибыль: <span>— ₽</span></p>
          <span class="tips">
            <span class="tips__btn">?</span>
            <span class="tips__message">Ориентировочная валовая прибыль после вычета расходов на
              маркетинг</span>
          </span>
        </div>
        <button type="button" class="button-decore open-popup" data-popup="resultsPopup">Узнайте как получить
          результат!</button>
      </div>
    </div>

    <div class="ads-calculator__block " data-calc-block="3">
      <div class="ads-calculator__card border-gradient">
        <div class="ads-calculator__subtitle">Вводные данные:</div>
        <div class="ads-calculator__row">
          <div class="ads-calculator__area">
            <div class="ads-calculator__label gradient-text">Выручка в месяц:
              <span class="tips">
                <span class="tips__btn">?</span>
                <span class="tips__message">Укажите объем выручки (оборот), которую вы хотели бы получать
                  (минимально 100 000 р.)</span>
              </span>
            </div>
            <div class="border-gradient">
              <input type="number" class="ads-calculator__input" inputmode="numeric"
                placeholder="Укажите кол-во">
            </div>
          </div>
          <div class="ads-calculator__area">
            <div class="ads-calculator__label gradient-text">Средний чек:
              <span class="tips">
                <span class="tips__btn">?</span>
                <span class="tips__message">Укажите среднюю сумму, которую вам приносит клиент в
                  месяц</span>
              </span>
            </div>
            <div class="border-gradient">
              <input type="number" class="ads-calculator__input" inputmode="numeric"
                placeholder="Укажите в процентах">
            </div>
          </div>
        </div>
        <div class="ads-calculator__row">
          <div class="ads-calculator__area">
            <div class="ads-calculator__label gradient-text">Средняя маржинальность (%):
              <span class="tips">
                <span class="tips__btn">?</span>
                <span class="tips__message">Укажите среднюю рентабельность по вашей валовой прибыли</span>
              </span>
            </div>
            <div class="border-gradient">
              <input type="number" class="ads-calculator__input" inputmode="numeric"
                placeholder="Укажите сумму в рублях">
            </div>
          </div>
        </div>
        <div class="ads-calculator__row">
          <div class="ads-calculator__area">
            <div class="ads-calculator__label gradient-text">Планируемая доля расходов на маркетинг от
              выручки (%):
              <span class="tips">
                <span class="tips__btn">?</span>
                <span class="tips__message">Укажите ориентировочный процент от выручки, который вы готовы
                  потратить на маркетинг</span>
              </span>
            </div>
            <div class="border-gradient">
              <input type="number" class="ads-calculator__input" inputmode="numeric"
                placeholder="Укажите в процентах">
            </div>
          </div>
        </div>
        <div class="ads-calculator__row">
          <div class="ads-calculator__area">
            <div class="ads-calculator__label gradient-text">Средняя конверсия из обращения в продажу (%):
              <span class="tips">
                <span class="tips__btn">?</span>
                <span class="tips__message">Какой процент обратившихся к вам людей становятся клиентами и
                  заказывают
                  товар/услугу</span>
              </span>
            </div>
            <div class="border-gradient">
              <input type="number" class="ads-calculator__input" inputmode="numeric"
                placeholder="Укажите в процентах">
            </div>
          </div>
        </div>
        <div class="ads-calculator__card-dec"></div>
        <div class="ads-calculator__card-dec"></div>
      </div>
      <div class="ads-calculator__results border-gradient">
        <div class="ads-calculator__subtitle">Результат расчёта:</div>
        <div class="ads-calculator__result">
          <p>Бюджет на маркетинг в месяц: <span>— ₽</span></p>
          <span class="tips">
            <span class="tips__btn">?</span>
            <span class="tips__message">Ориентировочный бюджет на ваш маркетинговый отдел, включая
              ФОТ</span>
          </span>
        </div>
        <div class="ads-calculator__result">
          <p>Допустимая стоимость клиента (CAC): <span>— ₽</span></p>
          <span class="tips">
            <span class="tips__btn">?</span>
            <span class="tips__message">При заданных выше параметрах вы можете привлекать себе клиента не
              дороже указанной суммы</span>
          </span>
        </div>
        <div class="ads-calculator__result">
          <p>Допустимая стоимость лида (CPL): <span>— ₽</span></p>
          <span class="tips">
            <span class="tips__btn">?</span>
            <span class="tips__message">При заданных выше параметрах вы можете привлекать себе заявку
              (обращение) не дороже указанной суммы</span>
          </span>
        </div>
        <div class="ads-calculator__result">
          <p>Необходимое кол-во клиентов/месяц: <span>— ₽</span></p>
          <span class="tips">
            <span class="tips__btn">?</span>
            <span class="tips__message">Минимальное кол-во клиентов для обеспечения заданной выручки</span>
          </span>
        </div>
        <div class="ads-calculator__result">
          <p>Необходимое кол-во лидов/месяц: <span>— ₽</span></p>
          <span class="tips">
            <span class="tips__btn">?</span>
            <span class="tips__message">Минимальное кол-во заявок для обеспечения заданной выручки</span>
          </span>
        </div>
        <div class="ads-calculator__result">
          <p>Вaловая прибыль: <span>— ₽</span></p>
          <span class="tips">
            <span class="tips__btn">?</span>
            <span class="tips__message">Ориентировочная валовая прибыль после вычета расходов на
              маркетинг</span>
          </span>
        </div>
        <button type="button" class="button-decore open-popup" data-popup="resultsPopup">Узнайте как получить
          результат!</button>
      </div>
    </div>
  </div>
</section>