    <nav>
        <ul class="breadcrumbs">
            <li><a href="#" class="bc">Главная</a></li>
            <li><a href="#" class="bc">Вклады</a></li>
            <li class="bc_tap">Калькулятор</li>
        </ul>
    </nav>
    <div class="middle">
        <div class="middle_text"><h1>Калькулятор</h1></div>
        <div class="middle_opt_1">
            <div class="middle_opt_1_text">Дата оформления вклада</div>
            <div class="middle_opt_1_input">
                <input type="text" class="inputs" id="datepicker">
            </div>
        </div>
        <div class="middle_opt_2">
            <table><tr>
            <td id="td_21"><div class="middle_opt_2_text">Сумма вклада</div></td>
            <td id="td_22"><div class="middle_opt_2_input"><input value="1000" id="sum_income_1" type="number" class="inputs"></div></td>
            <td id="td_23">
                <div class="middle_opt_2_scroll">
                <input type="range" id="scroll_number_1" class="range" min="1000" max="3000000" step="5" value="1000"><br>
                <span id="span_range_1">1 тыс.руб.</span>
                <span id="span_range_2"><em>3 000 000</em></span>
                </div>
            </td>
            </table></tr>
        </div>
        <div class="middle_opt_3">
            <div class="middle_opt_3_text">Срок вклада</div>
            <div class="middle_opt_3_select" >
                <select class="inputs" id="years">
                    <option> 1 год </option>
                    <option> 2 года </option>
                    <option> 3 года </option>
                    <option> 4 года </option>
                    <option> 5 лет </option>
                </select>
            </div>
        </div>
        <div class="middle_opt_4">
            <div class="middle_opt_4_text">Пополнение вклада</div>
            <div class="middle_opt_4_radios">
                <input type="radio" name="ch" checked value="false">Нет
                <input type="radio" name="ch" value="true">Да
            </div>
        </div>
        <div class="middle_opt_5">
            <table><tr>
            <td id="td_51">
                <div class="middle_opt_5_text">Сумма пополнения вклада</div>
            </td>
            <td id="td_52">
                <div class="middle_opt_5_input">
                    <input type="number" class="inputs" value="1000" id="sum_income_2">
                </div>
            </td>
            <td id="td_53">
                <div class="middle_opt_5_scroll">
                    <input type="range" class="range" min="1000" max="3000000" step="5" id="scroll_number_2" value="1000"><br>
                    <span id="span_range_1">1 тыс.руб.</span>
                    <span id="span_range_2"><em>3 000 000</em></span>
                </div>
            </td>
        </table></tr>
        </div>
        <div class="middle_opt_6">
            <input type="button" value="Рассчитать" class="middle_opt_6_button" id="submitForm"/>
            <div class="middle_opt_6_result">
                <div class="result_text">Результат:</div>
                <div class="result_number" id="result_number">0</div>
            </div>
        </div>
    </div>