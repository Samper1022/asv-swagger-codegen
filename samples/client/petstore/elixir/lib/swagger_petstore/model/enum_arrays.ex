# NOTE: This class is auto generated by the swagger code generator program.
# https://github.com/swagger-api/swagger-codegen.git
# Do not edit the class manually.

defmodule SwaggerPetstore.Model.EnumArrays do
  @moduledoc """
  
  """

  @derive [Poison.Encoder]
  defstruct [
    :"just_symbol",
    :"array_enum"
  ]

  @type t :: %__MODULE__{
    :"just_symbol" => String.t,
    :"array_enum" => [String.t]
  }
end

defimpl Poison.Decoder, for: SwaggerPetstore.Model.EnumArrays do
  def decode(value, _options) do
    value
  end
end

