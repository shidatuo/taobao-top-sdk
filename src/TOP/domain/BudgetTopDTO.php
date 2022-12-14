<?php

namespace TOP\domain;

/**
 * 预算
 * @author auto create
 */
class BudgetTopDTO
{

	/**
	 * 统一预算金额，单位：分
	 **/
	public $budget;

	/**
	 * 预算类型 -1：不限、1：指定预算（每天预算相同）、2：总预算、3：分日预算(每天预算不同)
	 **/
	public $budget_type;
}
?>
